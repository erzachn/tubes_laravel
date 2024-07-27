# Nama kontainer Docker (jika menggunakan Docker)
CONTAINER = laravel_app

# Rule default
all: setup

setup: install setup-env setup-key migrate

reset: rebuild setup-env setup-key fresh

setup-env:
	cp .env.example .env

setup-key:
	php artisan key:generate

# Rule untuk menginstal dependensi dengan Composer
install:
	@if [ -f composer.json ]; then \
		composer install; \
	fi

# Rule untuk menjalankan migrasi
migrate:
	@if [ -f artisan ]; then \
		php artisan migrate; \
	fi

# fresh migration
fresh:
	@if [ -f artisan ]; then \
		php artisan migrate:fresh --seed; \
	fi

# Rule untuk menjalankan seeder
seed:
	@if [ -f artisan ]; then \
		php artisan db:seed; \
	fi

# Rule untuk menjalankan server
run:
	@if [ -f artisan ]; then \
		php artisan serve --host=0.0.0.0 --port=8000; \
	fi

# Rule untuk menjalankan tes
test:
	@if [ -f artisan ]; then \
		php artisan test; \
	fi

# Rule untuk membersihkan cache aplikasi
clear-cache:
	@if [ -f artisan ]; then \
		php artisan cache:clear; \
		php artisan config:clear; \
		php artisan route:clear; \
		php artisan view:clear; \
	fi

# Rule untuk membangun ulang proyek (menghapus vendor dan menginstal ulang)
rebuild:
	@if [ -d vendor ]; then \
		rm -rf vendor; \
	fi
	make install

# Rule untuk menjalankan perintah artisan dalam kontainer Docker (jika menggunakan Docker)
docker-artisan:
	docker exec -it $(CONTAINER) php artisan $(cmd)

# Rule untuk menjalankan Composer dalam kontainer Docker (jika menggunakan Docker)
docker-composer:
	docker exec -it $(CONTAINER) composer $(cmd)

.PHONY: all install migrate seed serve test clear-cache rebuild docker-artisan docker-composer
