test:
	php ./vendor/nette/tester/Tester/tester -j 10 ./tests;


prepare:
	composer update --dev;
