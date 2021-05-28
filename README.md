# Medical Site 



## Table of Contents
* [General Info](#general-information)
* [Technologies Used](#technologies-used)
* [Features](#features)
* [Screenshots](#screenshots)
* [Setup](#setup)
* [Usage](#usage)
* [Project Status](#project-status)
* [Room for Improvement](#room-for-improvement)
* [Acknowledgements](#acknowledgements)
* [Contact](#contact)
<!-- * [License](#license) -->


## General Information
 Strona internetowa kliniki. Korzystając ze strony możesz zobaczyć przebieg pracy kliniki w Internecie. Każda instytucja potrzebuje własnej strony internetowej, czy to biznes, czy duża korporacja. 
  - 
<!-- You don't have to answer all the questions - just the ones relevant to your project. -->


## Technologies Used
- PhP
- MySQL
- Bootstrap
- MAMP


## Features
 Funkcjonalność serwisu jest rozbudowana
  - Możesz się zarejestrować i zalogować
  - Klient musi zostawić swoje dane
  - Klient może zapisać się na wizyte i przeglądać swoje poprzednie wpisy
  - Lekarz może sprawdzić swój harmonogram
  - Są to również uprawnienia administratora, który może edytować dane, zmieniać zapisy oraz przeglądać wszystkie dane klienta i lekarza, a także ich harmonogram i wizyty.


## Screenshots
![Screenshot_1](https://user-images.githubusercontent.com/60564197/119906434-e4b39880-bf56-11eb-85d5-6c1dd995cbea.png)






![Screenshot_2](https://user-images.githubusercontent.com/60564197/119906437-e5e4c580-bf56-11eb-964e-ed74b6546b16.png)

<!-- If you have screenshots you'd like to share, include them here. -->


## Setup

Aby otworzyć projekt, potrzebujesz:
- Pobierz sam projekt z Github
- Pobierz wybraną bazę danych(MAMP / XAMP / Open Server)
- Uruchom ją 
- Dodaj plik meds do bazy danych phpmyadmin
- Otwórz pobrany projekt PhP ш w pliku rejestracyjnym zapisz login i hasło od administratora 
- Uruchom serwer za pomocą linku localhost




## Usage

      $id_patient= $_POST['id_patient2'];

      $Name= $_POST['Name2'];

      $id= $_POST['id2'];

     $Name_patient= $_POST['Name_patient2'];

     $Price= $_POST['Price2'];


     mysqli_query($Connect_db, "UPDATE  {$Name}   SET  svobodnaa_li = 'занятая', pacient = '$Name_patient', price = '$Price'    WHERE  data = '{$id}'   LIMIT 1   ");


## Project Status
__Projekt zakończony.
Jestem zaangażowany w następujące projekty.__

## Room for Improvement

Room for improvement:
- Dodać funkcjonalność
- Wyslać do hostingu 




## Acknowledgements
Projekt powstał zrobiony dzięki lekcjom mgr Rafał Jółkowski.



## Contact
 [![Telegram](https://img.shields.io/badge/-Telegram-1F022C?style=for-the-badge&logo=telegram&logoColor=35ACE4)](https://t.me/idudos)
 
 

 [![LinkedIn](https://img.shields.io/badge/-LinkedIn-1F022C?style=for-the-badge&logo=linkedin&logoColor=35ACE4)](https://www.linkedin.com/in/kostiantyn-chumak-98097b1a7/)
 
 

   
    + E-mail: kostiantynchumak@gmail.com



<!-- Optional -->
<!-- ## License -->
<!-- This project is open source and available under the [... License](). -->

<!-- You don't have to include all sections - just the one's relevant to your project -->
