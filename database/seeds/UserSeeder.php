<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        $user = [
            ['id' => 1, 'firstName' => 'Patrik', 'lastName' => 'Home', 'countryCodePhoneId' => 125, 'phone' => '987456321', 'email' => 'homap04@gmail.com', 'note' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec iaculis gravida nulla. Duis bibendum, lectus ut viverra rhoncus, dolor nunc faucibus libero, eget facilisis enim ipsum id lacus. Cras elementum. Fusce wisi. Fusce tellus odio, dapibus id fermentum quis, suscipit id erat. Nulla est. Nunc tincidunt ante vitae massa. Fusce nibh. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat. In convallis. Morbi leo mi, nonummy eget tristique non, rhoncus non leo. Integer vulputate sem a nibh rutrum consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Praesent in mauris eu tortor porttitor accumsan. Curabitur bibendum justo non orci. Fusce wisi. Phasellus et lorem id felis nonummy placerat. Praesent id justo in neque elementum ultrices. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Suspendisse nisl. Nulla quis diam. Duis ante orci, molestie vitae vehicula venenatis, tincidunt ac pede. Integer tempor. Nulla est. Curabitur sagittis hendrerit ante. Integer in sapien. Maecenas libero. Fusce nibh. Curabitur ligula sapien, pulvinar a vestibulum quis, facilisis vel sapien. Proin mattis lacinia justo. Fusce dui leo, imperdiet in, aliquam sit amet, feugiat eu, orci. In sem justo, commodo ut, suscipit at, pharetra vitae, orci. Etiam egestas wisi a erat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Praesent in mauris eu tortor porttitor accumsan. Etiam ligula pede, sagittis quis, interdum ultricies, scelerisque eu. Aenean id metus id velit ullamcorper pulvinar. Praesent dapibus. Fusce tellus. Praesent vitae arcu tempor neque lacinia pretium. Et harum quidem rerum facilis est et expedita distinctio. Mauris dictum facilisis augue. Aliquam ornare wisi eu metus. Donec vitae arcu. Aenean placerat. Mauris suscipit, ligula sit amet pharetra semper, nibh ante cursus purus, vel sagittis velit mauris vel metus. Nullam dapibus fermentum ipsum. Maecenas aliquet accumsan leo. Sed ac dolor sit amet purus malesuada congue. Etiam ligula pede, sagittis quis, interdum ultricies, scelerisque eu. Duis viverra diam non justo. Suspendisse nisl. Praesent vitae arcu tempor neque lacinia pretium. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Quisque tincidunt scelerisque libero. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Duis ante orci, molestie vitae vehicula venenatis, tincidunt ac pede. Maecenas ipsum velit, consectetuer eu lobortis ut, dictum at dui. Mauris metus. Maecenas sollicitudin. Phasellus et lorem id felis nonummy placerat. Sed ac dolor sit amet purus malesuada congue. Nulla pulvinar eleifend sem.'],
            ['id' => 2, 'firstName' => 'John', 'lastName' => 'Doe1', 'countryCodePhoneId' => 57, 'phone' => '722598664', 'email' => 'doe@gmail.com', 'note' => ''],
            ['id' => 3, 'firstName' => 'John', 'lastName' => 'Doe2', 'countryCodePhoneId' => 57, 'phone' => '722598664', 'email' => 'doe1@gmail.com', 'note' => ''],
            ['id' => 4, 'firstName' => 'John', 'lastName' => 'Doe3', 'countryCodePhoneId' => 57, 'phone' => '722598664', 'email' => 'doe2@gmail.com', 'note' => ''],
            ['id' => 5, 'firstName' => 'John', 'lastName' => 'Doe4', 'countryCodePhoneId' => 57, 'phone' => '722598664', 'email' => 'doe3@gmail.com', 'note' => ''],
            ['id' => 6, 'firstName' => 'John', 'lastName' => 'Doe5', 'countryCodePhoneId' => 57, 'phone' => '722598664', 'email' => 'doe4@gmail.com', 'note' => ''],
            ['id' => 7, 'firstName' => 'John', 'lastName' => 'Doe6', 'countryCodePhoneId' => 57, 'phone' => '722598664', 'email' => 'doe5@gmail.com', 'note' => ''],
            ['id' => 8, 'firstName' => 'John', 'lastName' => 'Doe7', 'countryCodePhoneId' => 57, 'phone' => '722598664', 'email' => 'doe6@gmail.com', 'note' => ''],
            ['id' => 9, 'firstName' => 'John', 'lastName' => 'Doe8', 'countryCodePhoneId' => 57, 'phone' => '722598664', 'email' => 'doe7@gmail.com', 'note' => ''],
            ['id' => 10, 'firstName' => 'John', 'lastName' => 'Doe9', 'countryCodePhoneId' => 57, 'phone' => '722598664', 'email' => 'doe8@gmail.com', 'note' => ''],
        ];

        DB::table('users')->insert($user);
    }
}
