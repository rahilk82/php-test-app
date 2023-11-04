# Use an official PHP base image
FROM php:7.4-apache

# Set the working directory in the container
WORKDIR /var/www/html

#Adding the MySqli
RUN docker-php-ext-install mysqli

# Copy your PHP application code into the container
COPY . .

# Expose the Apache web server port
EXPOSE 80

# Start the Apache web server
CMD ["apache2-foreground"]

