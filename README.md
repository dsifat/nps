# Installation

##### System Requirements
- Node: v14.15.5 or above (LTS)
- PHP: 7.3v or Above
- Composer: 2.0.4v or Above
- Laravel: 8.0v or Above

Given below are the steps you need to follow:

Step 1: Open the terminal in your root directory to install the composer packages run the following command:

		php composer install
Step 2: In the root directory, you will find a file named .env.example, rename the given file name to .env and run the following command to generate the key (and you can also edit your database credentials here).

		php artisan key:generate
 
Step 3: By running the following command, you will be able to get all the dependencies in your node_modules folder:

		npm install
        
Step 4: To run the project, you need to run following command in the project directory. It will compile the resource files & all the other project files. If you are making any changes in any of the resource file then you need to run the given command again.

		npm run development 
Step 5: To serve the application you need to run the following command in the project directory. (This will give you an address with port number 8000.)

Now navigate to the given address you will see your application is running.


		php artisan serve

###### Required Permissions
If you are facing any issues regarding the permissions, then you need to run the following command in your project directory:

		sudo chmod -R o+rw bootstrap/cache
		sudo chmod -R o+rw storage
