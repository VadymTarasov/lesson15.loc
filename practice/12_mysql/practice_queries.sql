select * from students left join st_gr on students.id = st_gr.id_st where students.id = 1;

select id_gr, count(*) from st_gr group by id_gr;

select id_gr, title, count(*) as count from st_gr INNER JOIN groops g on st_gr.id_gr = g.id group by id_gr having count > 2;

select title from groops order by 1 desc limit 2;

select title from groops order by 1 asc limit 6;

select * from teachers join gr_tch on teachers.id = gr_tch.id_tch;

select * from teachers join gr_tch on teachers.id = gr_tch.id_tch where teachers.name = 'Meru';

select * from teachers;

select * from teachers tch inner join gr_tch on tch.id = gr_tch.id_tch;

select * from teachers tch inner join gr_tch on tch.id = gr_tch.id_tch;

select * from teachers tch right outer join gr_tch on tch.id = gr_tch.id_tch;

select * from teachers tch where exists (select 1 from gr_tch where tch.id = gr_tch.id_tch);

select * from teachers tch where not exists (select 1 from gr_tch where tch.id = gr_tch.id_tch);

select * from teachers tch left outer join gr_tch on tch.id = gr_tch.id_tch where gr_tch.id_tch is null;

select * from teachers tch right outer join gr_tch on tch.id = gr_tch.id_tch where tch.id is null

select * from teachers tch left outer join gr_tch on tch.id = gr_tch.id_tch union select * from teachers tch right outer join gr_tch on tch.id = gr_tch.id_tch;

