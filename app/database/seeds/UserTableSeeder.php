  <?php
 
class UserTableSeeder extends Seeder {
 
  public function run()
  {
    $user = User::create(array(
  'username' => 'KlausRaynor',
  'first_name' => 'Klaus',
  'last_name' => 'Holder',
  'email' => 'kholder@g.harvard.edu',
  'password' => 'qwerty'
));

  $faker = Faker\Factory::create();
 
for ($i = 0; $i < 10; $i++)
{
  $user = User::create(array(
    'username' => $faker->userName,
    'first_name' => $faker->firstName,
    'last_name' => $faker->lastName,
    'email' => $faker->email,
    'password' => $faker->word
  ));
}
  }
 
}

