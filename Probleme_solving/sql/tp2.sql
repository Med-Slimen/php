set SERVEROUTPUT ON
/*
Exercice 1:
declare
a number:=&saisir_nombre1;
b number:=&saisir_nombre2;
c number;
begin
c:=(a*b)/(a+b);
DBMS_OUTPUT.PUT_LINE(' '||a||' * '||b||'/'||a||'+'||b||' = '||c);
end;*/
/* Exercice 2 : */
/* 1
declare
age_act number;
nom_act varchar(20);
begin
select nom into nom_act from acteur where age=(select max(age) from acteur);
DBMS_OUTPUT.PUT_LINE('le nom du plus grand acteur est '||nom_act);
end;
*/
/* 2/
declare
titre_film varchar(20):='&saisir_titre';
date_s date;
begin
select date_sortie into date_s from film where titre like '%'||titre_film||'%';
DBMS_OUTPUT.PUT_LINE('la date du sortie du film '||titre_film || ' est '||date_s);
end; */

/* 3)
declare
somme_salaire number;
natio varchar(20):='&saisir_natio';
begin
select sum(salaire) into somme_salaire from acteur a , jouer j,film f
where a.codeA=j.codeA and f.codeF=j.codeF and lower(nationalite)=lower(natio);
DBMS_OUTPUT.PUT_LINE('la somme de salaire ( nationalité : '||natio|| ' ) est '||somme_salaire);
end;
*/
/*
suite exercice 3 

3) */
/*
create table emp as select * from hr.employees;*/
/*
declare
num_emp number:=&saisir_num;
type t_eng is record(
fs varchar(20),
ls varchar(20),
jb varchar(20),
sl number,
dp number);
eng t_eng;
begin
select first_name,last_name,job_id,salary,department_id into eng
from emp
where employee_id=num_emp;
DBMS_OUTPUT.PUT_LINE('Nom complet = '||eng.fs||' '||eng.ls||' job_id = '||eng.jb||' salaire = '||eng.sl||' department = '||eng.dp);
end;*/

/*
5)
declare
salaire number;
comm float;
res float;
begin
select salary,commission_pct into salaire,comm
from emp
where first_name='Tayler' and last_name='Fox';
res:=(salaire*12)+((salaire*comm)*12);
DBMS_OUTPUT.PUT_LINE('Le salaire annuel du Taylor Fox avec le commision est : '||res);
end;
*/
/*
declare
res boolean;
begin
insert into emp(employee_id,first_name,last_name,email,hire_date,job_id)
values(208,'Brad','Pitt','pitt@gmail.com','05/MAR/2020','IT_PROG');
DBMS_OUTPUT.PUT_LINE('Ligne inseré');
end;*/
declare
dep number:=&saisir_dep;
sum_s number;
sum_c number;
res number;
begin
select sum(salary+(salary*commission_pct)) into res
from emp
where department_id=dep;
DBMS_OUTPUT.PUT_LINE('resultat :'||res);
end;

