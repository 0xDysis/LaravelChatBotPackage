# Laravel Chatbot Package

This package provides a comprehensive integration for creating and managing chatbots using the Laravel framework and the Openai api. this package supports both retrieval and code interpreter assistants.

## Features

- Message submission and retrieval
- Run initiation and cancellation with status checks
- File downloads related to chatbot messages
- create assistant with file upload
- Thread and assistant lifecycle management

## usage
configure your assistant in the 'MyOpenAIService' 
all services have been injected in the 'OpenAIController'

## Installation

To install the Laravel Chatbot package, run the following command in your project:


composer require laravelai/laravelchatbot
Publish the package's assets, migrations, and configuration files using:



php artisan vendor:publish --provider="ChatbotPackage\LaravelChatbotServiceProvider"
Run the migrations to set up the database tables:


php artisan migrate

Contributing
Contributions are welcome. Please open an issue or submit a pull request with your changes.

License
This Laravel Chatbot package is open-sourced software licensed under the MIT license.
