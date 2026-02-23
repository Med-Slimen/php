/*select nom,nbparticip
from statcoureur
where nbparticip>=3


select nom,count(p.numc)as nbParticipation
from coureur c,participation p
where c.numc=p.numc
group by nom
having count(p.numc)>=3;

insert into participation values(201,'M4/2021','arrivé',402,2);

create or replace view  jeunecoureur as
( select *
from coureur
where extract(year from sysdate)-extract(year from datenaiss) between 20 and 25);

insert into jeunecoureur values(207,'Aicha Rokbani','Korba','F','28/JAN/2000');

delete from coureur 
where numc=207;

create or replace view  jeunecoureur as
( select *
from coureur
where extract(year from sysdate)-extract(year from datenaiss) between 20 and 25) with check option;

insert into jeunecoureur values(207,'Aicha Rokbani','Korba','F','28/JAN/2000');

insert into jeunecoureur values(208,'Omar Badis','Manouba','M','29/FEB/2004');

update jeunecoureur
set datenaiss='28/FEB/1999'
where numc=208;

drop view jeuneCoureur;

create index coureur_nom_indexe on coureur(nom);

Set serveroutput on
declare
nb_ville number(2);
nb_genre number(2);
begin
select count(distinct ville) into nb_ville from coureur;
select count(distinct genre) into nb_genre from coureur;
dbms_output.put_line('Nombre de ville '||nb_ville||' Nombre genre '||nb_genre);
end;*/