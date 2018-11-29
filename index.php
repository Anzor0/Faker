<meta charset="utf-8">
<?php

require "vendor/autoload.php";

$faker = Faker\Factory::create('ru_RU');

/*echo $faker->name.'<br>';
echo $faker->address.'<br>';
echo $faker->realtext(200);*/


/*$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
print_r($faker->shuffle($arr));*/
/*echo $faker->firstNameMale;*/

/*echo $faker->City;*/

/*for($i = 0;$i < 10;$i++){
	echo $faker->unique()->randomNumber().'<br>';
}*/
/*for($i = 0;$i < 10;$i++){
	echo $faker->optional()->randomNumber().'<br>';
}*/

$func = function($digit){
	return $digit%2 === 0;
};

for($i = 0;$i < 10;$i++){
	echo $faker->valid($func)->randomNumber().'<br>';
}

/*for($i = 0;$i < 10; ++$i){
	$arr = $faker->creditCardDetails;
	$arr['code'] = $faker->numberBetween(199,499);
	print_r($arr);
}*/

/*echo "<img src='".$faker->imageUrl(400,400)."'/>";*/