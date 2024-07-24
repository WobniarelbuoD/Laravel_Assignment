Tools Required: XAMPP(Apache and MySQL need to be running), Visual Studio Code, Postman, composer and laravel installed.
1. Download the repository from github.
2. extract the files.
3. open vscode and select: File-> Open Folder... (and select the folder extracted.)
4. open up a termal: Terminal -> New Terminal (run command: composer install)
5. run commands: php artisan migrate (write yes to create new database), php artisan db:seed and php artisan serve.

The project should be running now.

Things to know: the url for the project is http://127.0.0.1:8000,
	the api request to add feedback is http://127.0.0.1:8000/api/add,
	there is an API_TOKEN variable in the file .env it's value needs to be passed as a header when making a request.
	The header should look like this: Key:Authorization, Value:token value
	the body of the request should look like this:
 
		{
			"game_id": 1,
			"platform": "iOS",
			"version": "1.0.3",
			"category": "bug",
			"content": "The game crashes when I try to start level 3."
		}

The add feedback request only accepts 1 entry per ip if you want to make multiple entries with the same ip go to: app->Http->Controllers-> FeedbackController.php and remove the lines:
    else if(DB::table('addresses')->where('address', $req->ip())->exists()){
        return response()->json(['message' => 'You have already submitted your feedback.'], 403);
    }
		
		
