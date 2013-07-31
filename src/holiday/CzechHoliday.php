<?php

namespace Grogy\Calendar\Holiday;

use Maxondesign\Exception\Logic\App\InvalidArgumentException;

class CzechHoliday implements IHoliday
{
	protected static $holiday = array(
		1 => array(
			1 => array('Nový rok', TRUE),
			array('Karina', FALSE),
			array('Radmila', FALSE),
			array('Diana', FALSE),
			array('Dalimil', FALSE),
			array('svátek Tří králů', TRUE),
			array('Vilma', FALSE),
			array('Čestmír', FALSE),
			array('Vladan', FALSE),
			array('Břetislav', FALSE),
			array('Bohdana', FALSE),
			array('Pravoslav', FALSE),
			array('Edita', FALSE),
			array('Radovan', FALSE),
			array('Alice', FALSE),
			array('Ctirad', FALSE),
			array('Drahoslav', FALSE),
			array('Vladislav', FALSE),
			array('Doubravka', FALSE),
			array('Ilona', FALSE),
			array('Běla', FALSE),
			array('Slavomír', FALSE),
			array('Zdeněk', FALSE),
			array('Milena', FALSE),
			array('Miloš', FALSE),
			array('Zora', FALSE),
			array('Ingrid', FALSE),
			array('Otýlie', FALSE),
			array('Zdislava', FALSE),
			array('Robin', FALSE),
			array('Marika', FALSE),
		),

		2 => array(
			1 => array('Hynek', FALSE),
			array('Nela', FALSE),
			array('Blažej', FALSE),
			array('Jarmila', FALSE),
			array('Dobromila', FALSE),
			array('Vanda', FALSE),
			array('Veronika', FALSE),
			array('Milada', FALSE),
			array('Apolena', FALSE),
			array('Mojmír', FALSE),
			array('Božena', FALSE),
			array('Slavěna', FALSE),
			array('Věnceslav', FALSE),
			array('Valentýn', FALSE),
			array('Jiřina', FALSE),
			array('Ljuba', FALSE),
			array('Miloslava', FALSE),
			array('Gizela', FALSE),
			array('Patrik', FALSE),
			array('Oldřich', FALSE),
			array('Lenka', FALSE),
			array('Petr', FALSE),
			array('Svatopluk', FALSE),
			array('Matěj', FALSE),
			array('Liliana', FALSE),
			array('Dorota', FALSE),
			array('Alexandr', FALSE),
			array('Lumír', FALSE),
			array('Horymír', FALSE),
		),

		3 => array(
			1 => array('Bedřich', FALSE),
			array('Anežka', FALSE),
			array('Kamil', FALSE),
			array('Stela', FALSE),
			array('Kazimir', FALSE),
			array('Miroslav', FALSE),
			array('Tomáš', FALSE),
			array('Gabriela', FALSE),
			array('Františka', FALSE),
			array('Viktorie', FALSE),
			array('Anděla', FALSE),
			array('Řehoř', FALSE),
			array('Růžena', FALSE),
			array('Rút a Matylda', FALSE),
			array('Ida', FALSE),
			array('Elena a Herbert', FALSE),
			array('Vlastimil', FALSE),
			array('Eduard', FALSE),
			array('Josef', FALSE),
			array('Světlana', FALSE),
			array('Radek', FALSE),
			array('Leona', FALSE),
			array('Ivona', FALSE),
			array('Gabriel', FALSE),
			array('Marian', FALSE),
			array('Emanuel', FALSE),
			array('Dita', FALSE),
			array('Soňa', FALSE),
			array('Taťána', FALSE),
			array('Arnošt', FALSE),
			array('Kvido', FALSE),
		),

		4 => array(
			1 => array('Hugo', FALSE),
			array('Erika', FALSE),
			array('Richard', FALSE),
			array('Ivana', FALSE),
			array('Miroslava', FALSE),
			array('Vendula', FALSE),
			array('Heřman a Hermína', FALSE),
			array('Ema', FALSE),
			array('Dušan', FALSE),
			array('Darja', FALSE),
			array('Izabela', FALSE),
			array('Julius', FALSE),
			array('Aleš', FALSE),
			array('Vincenc', FALSE),
			array('Anastázie', FALSE),
			array('Irena', FALSE),
			array('Rudolf', FALSE),
			array('Valérie', FALSE),
			array('Rostislav', FALSE),
			array('Marcela', FALSE),
			array('Alexandra', FALSE),
			array('Evženie', FALSE),
			array('Vojtěch', FALSE),
			array('Jiří', FALSE),
			array('Marek', FALSE),
			array('Oto', FALSE),
			array('Jaroslav', FALSE),
			array('Vlastislav', FALSE),
			array('Robert', FALSE),
			array('Blahoslav', FALSE),
		),

		5 => array(
			1 => array('Svátek práce', TRUE),
			array('Zikmund', FALSE),
			array('Alexej', FALSE),
			array('Květoslav', FALSE),
			array('Klaudie', FALSE),
			array('Radoslav', FALSE),
			array('Stanislav', FALSE),
			array('Den osvobození', TRUE),
			array('Ctibor', FALSE),
			array('Blažena', FALSE),
			array('Svatava', FALSE),
			array('Pankrác', FALSE),
			array('Servác', FALSE),
			array('Bonifác', FALSE),
			array('Žofie', FALSE),
			array('Přemysl', FALSE),
			array('Aneta', FALSE),
			array('Nataša', FALSE),
			array('Ivo', FALSE),
			array('Zbyšek', FALSE),
			array('Monika', FALSE),
			array('Emil', FALSE),
			array('Vladimír', FALSE),
			array('Jana', FALSE),
			array('Viola', FALSE),
			array('Filip', FALSE),
			array('Valdemar', FALSE),
			array('Vilém', FALSE),
			array('Maxmilián', FALSE),
			array('Ferdinand', FALSE),
			array('Kamila', FALSE),
		),

		6 => array(
			1 => array('Laura', FALSE),
			array('Jarmil', FALSE),
			array('Tamara', FALSE),
			array('Dalibor', FALSE),
			array('Dobroslav', FALSE),
			array('Norbert', FALSE),
			array('Iveta a Slavoj', FALSE),
			array('Medard', FALSE),
			array('Stanislava', FALSE),
			array('Gita', FALSE),
			array('Bruno', FALSE),
			array('Antonie', FALSE),
			array('Antonín', FALSE),
			array('Roland', FALSE),
			array('Vít', FALSE),
			array('Zbyněk', FALSE),
			array('Adolf', FALSE),
			array('Milan', FALSE),
			array('Leoš', FALSE),
			array('Květa', FALSE),
			array('Alois', FALSE),
			array('Pavla', FALSE),
			array('Zdeňka', FALSE),
			array('Jan', FALSE),
			array('Ivan', FALSE),
			array('Adriana', FALSE),
			array('Ladislav', FALSE),
			array('Lubomír', FALSE),
			array('Petr a Pavel', FALSE),
			array('Šárka', FALSE),
		),

		7 => array(
			1 => array('Jaroslava', FALSE),
			array('Patricie', FALSE),
			array('Radomír', FALSE),
			array('Prokop', FALSE),
			array('Státní svátek - Cyril a Metoděj', TRUE),
			array('Státní svátek - Mistr Jan Hus', TRUE),
			array('Bohuslava', FALSE),
			array('Nora', FALSE),
			array('Drahoslava', FALSE),
			array('Libuše a Amálie', FALSE),
			array('Olga', FALSE),
			array('Bořek', FALSE),
			array('Markéta', FALSE),
			array('Karolína', FALSE),
			array('Jindřich', FALSE),
			array('Luboš', FALSE),
			array('Martina', FALSE),
			array('Drahomíra', FALSE),
			array('Čeněk', FALSE),
			array('Ilja', FALSE),
			array('Vítězslav', FALSE),
			array('Magdaléna', FALSE),
			array('Libor', FALSE),
			array('Kristýna', FALSE),
			array('Jakub', FALSE),
			array('Anna', FALSE),
			array('Věroslav', FALSE),
			array('Viktor', FALSE),
			array('Marta', FALSE),
			array('Bořivoj', FALSE),
			array('Ignác', FALSE),
		),

		8 => array(
			1 => array('Oskar', FALSE),
			array('Gustav', FALSE),
			array('Miluše', FALSE),
			array('Dominik', FALSE),
			array('Kristian', FALSE),
			array('Oldřiška', FALSE),
			array('Lada', FALSE),
			array('Soběslav', FALSE),
			array('Roman', FALSE),
			array('Vavřinec', FALSE),
			array('Zuzana', FALSE),
			array('Klára', FALSE),
			array('Alena', FALSE),
			array('Alan', FALSE),
			array('Hana', FALSE),
			array('Jáchym', FALSE),
			array('Petra', FALSE),
			array('Helena', FALSE),
			array('Ludvík', FALSE),
			array('Bernard', FALSE),
			array('Johana', FALSE),
			array('Bohuslav', FALSE),
			array('Sandra', FALSE),
			array('Bartoloměj', FALSE),
			array('Radim', FALSE),
			array('Luděk', FALSE),
			array('Otakar', FALSE),
			array('Augustýn', FALSE),
			array('Evelína', FALSE),
			array('Vladěna', FALSE),
			array('Pavlína', FALSE),
		),

		9 => array(
			1 => array('Linda a Samuel', FALSE),
			array('Adéla', FALSE),
			array('Bronislav', FALSE),
			array('Jindřiška', FALSE),
			array('Boris', FALSE),
			array('Boleslav', FALSE),
			array('Regína', FALSE),
			array('Mariana', FALSE),
			array('Daniela', FALSE),
			array('Irma', FALSE),
			array('Denisa', FALSE),
			array('Marie', FALSE),
			array('Lubor', FALSE),
			array('Radka', FALSE),
			array('Jolana', FALSE),
			array('Ludmila', FALSE),
			array('Naděžda', FALSE),
			array('Kryštof', FALSE),
			array('Zita', FALSE),
			array('Oleg', FALSE),
			array('Matouš', FALSE),
			array('Darina', FALSE),
			array('Berta', FALSE),
			array('Jaromír', FALSE),
			array('Zlata', FALSE),
			array('Andrea', FALSE),
			array('Jonáš', FALSE),
			array('Václav', FALSE),
			array('Michal', FALSE),
			array('Jeroným', FALSE),
		),

		10 => array(
			1 => array('Igor', FALSE),
			array('Olivie a Oliver', FALSE),
			array('Bohumil', FALSE),
			array('František', FALSE),
			array('Eliška', FALSE),
			array('Hanuš', FALSE),
			array('Justýna', FALSE),
			array('Věra', FALSE),
			array('Štefan a Sára', FALSE),
			array('Marina', FALSE),
			array('Andrej', FALSE),
			array('Marcel', FALSE),
			array('Renáta', FALSE),
			array('Agáta', FALSE),
			array('Tereza', FALSE),
			array('Havel', FALSE),
			array('Hedvika', FALSE),
			array('Lukáš', FALSE),
			array('Michaela', FALSE),
			array('Vendelín', FALSE),
			array('Brigita', FALSE),
			array('Sabina', FALSE),
			array('Teodor', FALSE),
			array('Nina', FALSE),
			array('Beáta', FALSE),
			array('Erik', FALSE),
			array('Šarlota a Zoe', FALSE),
			array('Státní svátek', TRUE),
			array('Silvie', FALSE),
			array('Tadeáš', FALSE),
			array('Štěpánka', FALSE),
		),

		11 => array(
			1 => array('Felix', FALSE),
			array('Památka zesnulých', TRUE),
			array('Hubert', FALSE),
			array('Karel', FALSE),
			array('Miriam', FALSE),
			array('Liběna', FALSE),
			array('Saskie', FALSE),
			array('Bohumír', FALSE),
			array('Bohdan', FALSE),
			array('Evžen', FALSE),
			array('Martin', FALSE),
			array('Benedikt', FALSE),
			array('Tibor', FALSE),
			array('Sáva', FALSE),
			array('Leopold', FALSE),
			array('Otmar', FALSE),
			array('Mahulena', FALSE),
			array('Romana', FALSE),
			array('Alžběta', FALSE),
			array('Nikola', FALSE),
			array('Albert', FALSE),
			array('Cecílie', FALSE),
			array('Klement', FALSE),
			array('Emílie', FALSE),
			array('Kateřina', FALSE),
			array('Artur', FALSE),
			array('Xenie', FALSE),
			array('René', FALSE),
			array('Zina', FALSE),
			array('Ondřej', FALSE),
		),

		12 => array(
			1 => array('Iva', FALSE),
			array('Blanka', FALSE),
			array('Svatoslav', FALSE),
			array('Barbora', FALSE),
			array('Jitka', FALSE),
			array('Mikuláš', FALSE),
			array('Ambrož a Benjamín', FALSE),
			array('Květoslava', FALSE),
			array('Vratislav', FALSE),
			array('Julie', FALSE),
			array('Dana', FALSE),
			array('Simona', FALSE),
			array('Lucie', FALSE),
			array('Lýdie', FALSE),
			array('Radana a Radan', FALSE),
			array('Albína', FALSE),
			array('Daniel', FALSE),
			array('Miloslav', FALSE),
			array('Ester', FALSE),
			array('Dagmar', FALSE),
			array('Natálie', FALSE),
			array('Šimon', FALSE),
			array('Vlasta', FALSE),
			array('Adam a Eva', FALSE),
			array('Boží hod', TRUE),
			array('Štěpán', FALSE),
			array('Žaneta', FALSE),
			array('Bohumila', FALSE),
			array('Judita', FALSE),
			array('David', FALSE),
			array('Silvestr', FALSE),
		),
	);



	public function isFreeHoliday($day, $month)
	{
		if (!isset(self::$holiday[$month]) || !isset(self::$holiday[$month][$day]))
			throw new InvalidArgumentException;

		return self::$holiday[$month][$day][1];
	}
}