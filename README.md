**_Kodėl Nfq\Akademija\Soft\calculateHomeWorkSum(3, 2.2, ‘1’) yra 6?_**
</br>

Dėl to, nes funkcija tikisi int tipo argumentų ( int ...$numbers ) . Jeigu į šią funkciją paduodame duomenis kurie nėra int tipo ir strict_type nėra įjungtas, PHP bandys pats konvertuoti paduotus duomenis į integer tipą.

Jeigu funkcijoje parašysime var_dump($numbers), matysime tokį outputą:  

array (size=3)   
  0 => int 3  
  1 => int 2  
  2 => int 1 
  
  Visus skaičiavimus funkcija vykdys jau su šitais duomenimis.
  
  **_Kas ir kodėl nutiko bandant kviesti  Nfq\Akademija\Strict\calculateHomeWorkSum(3, 2.2, ‘1’)?_**
  
  Iškvietę šią funkciją gauname klaidą:
   
   "Fatal error: Uncaught TypeError: Argument 2 passed to Nfq\Akademija\Strict\calculateStrictSum() must be of the type integer, float given" 
   
  
  Klaidą gauname todėl, nes functions_strict.php failo pradžioje yra įjungtas strict_types (define(strict_types=1)). Kadangi strict_types veikia tik tada, kai funkcija iškviečiame tame pačiame faile, reikėjo parašyti helperį, kuris kviečia tikrąją funkciją iš functions_strict.php failo. Kadangi funkcija tikisi int tipo argumentų ( int ...$numbers ), o antras paduotas argumentas (2.2) yra float tipo, gaunama klaida ir funkcija nėra vykdoma.
