# از تصویر رسمی PHP با Apache استفاده کن
FROM php:8.2-apache

# فایل‌های پروژه رو داخل دایرکتوری وب کپی کن
COPY . /var/www/html/

# دسترسی نوشتن برای فایل وضعیت بده
RUN chmod 777 /var/www/html/relay_state.txt || true

# پورت وب سرور
EXPOSE 80
