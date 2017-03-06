create table DENDA_TRANSAKSI 
(
   ID_DENDA             integer                        not null,
   ID_TRANSAKSI         integer                        null,
   ID_FASILITAS         integer                       null,
   TOTAL                integer                        null,
   constraint PK_DENDA_TRANSAKSI primary key (ID_DENDA)
);

drop table denda_transaksi;

create table FASILITAS_KAMAR 
(
   ID_FASILITAS         integer                        not null,
   ID_JENIS             integer                        null,
   NAMA_FASILITAS       varchar(30)                    null,
   HARGA_FASILITAS      integer                        null,
   constraint PK_FASILITAS_KAMAR primary key (ID_FASILITAS)
);

drop table fasilitas_kamar;

create table JENIS_KAMAR 
(
   ID_JENIS             integer                        not null,
   NAMA_JENIS           varchar(20)                    null,
   HARGA_JENIS          integer                        null,
   KAPASITAS            integer                        null,
   constraint PK_JENIS_KAMAR primary key (ID_JENIS)
);

drop table jenis_kamar;

create table KAMAR 
(
   NO_KAMAR             integer                        not null,
   ID_WISMA             integer                        null,
   ID_JENIS             integer                        null,
   constraint PK_KAMAR primary key (NO_KAMAR)
);

drop table kamar;

create table PETUGAS 
(
   ID_PETUGAS           integer                        not null,
   NAMA_PETUGAS         varchar(50)                    null,
   ALAMAT_PETUGAS       varchar(256)                   null,
   TELP_PETUGAS         varchar(20)                    null,
   UNAME_P              varchar(16)                    null,
   PASS_P               varchar(16)                    null,
   GAJI                 integer                        null,
   constraint PK_PETUGAS primary key (ID_PETUGAS)
);

drop table petugas;

create table TAMU 
(
   ID_TAMU              integer                        not null,
   NAMA_TAMU            varchar(50)                    null,
   ALAMAT_TAMU          varchar(256)                   null,
   TELP_TAMU            varchar(20)                    null,
   TGL_LAHIR            date                           null,
   constraint PK_TAMU primary key (ID_TAMU)
);

drop table tamu;

create table TRANSAKSI_SEWA 
(
   ID_TRANSAKSI         integer                        not null,
   ID_PETUGAS           integer                        null,
   NO_KAMAR             integer                        null,
   ID_TAMU              integer                        null,
   TGL_CHECKIN          date                           null,
   TGL_CHECKOUT         date                           null,
   LAMA_INAP            integer                        null,
   TOTAL                integer                        null,
   STATUS               integer                        null,
   constraint PK_TRANSAKSI_SEWA primary key (ID_TRANSAKSI)
);
drop table transaksi_sewa;

create table WISMA 
(
   ID_WISMA             integer                        not null,
   NAMA_WISMA           varchar(20)                    null,
   ALAMAT_WISMA         varchar(256)                   null,
   NO_TELP              varchar(20)                    null,
   constraint PK_WISMA primary key (ID_WISMA)
);

drop table wisma;

create table LOG_TRANSAKSI 
(
   ID_LOG               integer                        not null,
   ID_TRANSAKSI         integer                        null,
   AKTIVITAS            varchar(30)                    null,
   constraint PK_LOG_TRANSAKSI primary key (ID_LOG)
);

drop table log_transaksi;

create table LOG_HARGA_KAMAR
(
   ID_LOG_HARGA         integer                        not null,
   ID_JENIS             integer                        null,
   harga_lama           integer                         null,
   harga_baru           integer                         null,
  constraint PK_LOG_HARGA_KAMAR primary key (id_log_harga)
);

drop table log_harga_kamar;

alter table LOG_TRANSAKSI
   add constraint FK_LOG_TRAN_LOG_PERUB_TRANSAKS foreign key (ID_TRANSAKSI)
      references TRANSAKSI_SEWA (ID_TRANSAKSI)
      on delete cascade;
      
alter table log_transaksi
drop constraint FK_LOG_TRAN_LOG_PERUB_TRANSAKS;
      
alter table LOG_HARGA_KAMAR
   add constraint FK_LOG_HARG_MENGUBAH__JENIS_KA foreign key (ID_JENIS)
      references JENIS_KAMAR (ID_JENIS)
      on delete cascade;
      
      alter table log_harga_kamar
      drop constraint  FK_LOG_HARG_MENGUBAH__JENIS_KA;

alter table DENDA_TRANSAKSI
   add constraint FK_DENDA_TR_DENDA_TRANSAKS foreign key (ID_TRANSAKSI)
      references TRANSAKSI_SEWA (ID_TRANSAKSI)
      on delete cascade;
      
      alter table denda_transaksi
drop constraint FK_DENDA_TR_DENDA_TRANSAKS;
      
alter table DENDA_TRANSAKSI
   add constraint FK_DENDA_TR_DENDA_TRANSAKS2 foreign key (ID_FASILITAS)
      references FASILITAS_KAMAR (ID_FASILITAS)
      on delete cascade;
      
       alter table denda_transaksi
drop constraint FK_DENDA_TR_DENDA_TRANSAKS2;
      
alter table FASILITAS_KAMAR
   add constraint FK_FASILITA_FASILITAS_JENIS_KA foreign key (ID_JENIS)
      references JENIS_KAMAR (ID_JENIS)
      on delete cascade;
      
       alter table fasilitas_kamar
drop constraint FK_FASILITA_FASILITAS_JENIS_KA;
      
alter table KAMAR
   add constraint FK_KAMAR_JENIS_KAM_JENIS_KA foreign key (ID_JENIS)
      references JENIS_KAMAR (ID_JENIS)
      on delete cascade;
      
             alter table kamar
drop constraint FK_KAMAR_JENIS_KAM_JENIS_KA;

alter table KAMAR
   add constraint FK_KAMAR_WISMA_KAM_WISMA foreign key (ID_WISMA)
      references WISMA (ID_WISMA)
      on delete cascade;
      
      alter table kamar
drop constraint FK_KAMAR_WISMA_KAM_WISMA;

alter table TRANSAKSI_SEWA
   add constraint FK_TRANSAKS_DIPESAN_KAMAR foreign key (NO_KAMAR)
      references KAMAR (NO_KAMAR)
      on delete cascade;
      
            alter table transaksi_sewa
drop constraint FK_TRANSAKS_DIPESAN_KAMAR;

alter table TRANSAKSI_SEWA
   add constraint FK_TRANSAKS_MELAYANI_PETUGAS foreign key (ID_PETUGAS)
      references PETUGAS (ID_PETUGAS)
      on delete cascade;
      
                  alter table transaksi_sewa
drop constraint FK_TRANSAKS_MELAYANI_PETUGAS;

alter table TRANSAKSI_SEWA
   add constraint FK_TRANSAKS_MEMESAN_TAMU foreign key (ID_TAMU)
      references TAMU (ID_TAMU)
      on delete cascade;
      
                        alter table transaksi_sewa
drop constraint FK_TRANSAKS_MEMESAN_TAMU;
      
insert into wisma values('001','Wisma Bougenville','Perumdos ITS','0812345611');
insert into wisma values('002','Wisma Flamboyan','Perumdos ITS','0812345622');
insert into wisma values('003','Wisma Jasmine','Perumdos ITS','0812345633');

insert into jenis_kamar values (101, 'Standard', 250000, 2);
insert into jenis_kamar values (202, 'Eksekutif', 500000, 3);
insert into jenis_kamar values (303, 'VIP', 750000, 4);
insert into jenis_kamar values (404, 'Rumah', 1000000, 6);

insert into kamar values (1101, 001, 101);
insert into kamar values (1102, 001, 101);
insert into kamar values (1103, 001, 101);
insert into kamar values (1104, 001, 101);
insert into kamar values (1105, 001, 101);
insert into kamar values (1206, 001, 202);
insert into kamar values (1207, 001, 202);
insert into kamar values (1208, 001, 202);
insert into kamar values (1209, 001, 202);
insert into kamar values (1210, 001, 202);

insert into kamar values (2101, 002, 101);
insert into kamar values (2102, 002, 101);
insert into kamar values (2103, 002, 101);
insert into kamar values (2104, 002, 101);
insert into kamar values (2105, 002, 101);
insert into kamar values (2206, 002, 202);
insert into kamar values (2207, 002, 202);
insert into kamar values (2208, 002, 202);
insert into kamar values (2209, 002, 202);
insert into kamar values (2210, 002, 202);
insert into kamar values (2311, 002, 303);
insert into kamar values (2312, 002, 303);
insert into kamar values (2313, 002, 303);
insert into kamar values (2314, 002, 303);
insert into kamar values (2315, 002, 303);

insert into kamar values (3101, 003, 404);
insert into kamar values (3102, 003, 404);
insert into kamar values (3103, 003, 404);
insert into kamar values (3104, 003, 404);
insert into kamar values (3105, 003, 404);

create sequence petugas_seq
start with 80000
increment by 1;

create sequence fasilitas_seq
start with 70000
increment by 1;

create sequence denda_seq
start with 50000
increment by 1;

create sequence transaksi_seq
start with 60000
increment by 1;

create sequence log_trans_seq
start with 90000
increment by 1;

create sequence log_harga_seq
start with 40000
increment by 1;

insert into petugas values (petugas_seq.nextval, 'Rafiar Rahmansyah', 'Tangerang', '0822334455', 'rafraf', 'rafraf', '1500000');
insert into petugas values (petugas_seq.nextval, 'Nafiar Rahmansyah', 'Tangerang', '0822334466', 'nafnaf', 'nafnaf', '2000000');
insert into petugas values (petugas_seq.nextval, 'Ivaldy Putra', 'Jakarta Timur', '0822334477', 'valval', 'valval', '1500000');

insert into tamu values (5114100001, 'Nezar', 'Malang', '10101', NULL);
insert into tamu values (5114100002, 'Suhud', 'Surabaya', '10102', NULL);
insert into tamu values (5114100003, 'Dola', 'Padang', '10103', NULL);
insert into tamu values (5114100004, 'Bagus', 'Kediri', '10104', NULL);
insert into tamu values (5114100005, 'Angga', 'Malang', '10105', NULL);

insert into transaksi_sewa (id_transaksi, tgl_checkin, tgl_checkout) values (transaksi_seq.nextval, '23-MAY-2016', '25-MAY-2016');


--5114100105--IVALDY PUTRA-----------------------------------
--Function---------------------------------------------------
CREATE OR REPLACE FUNCTION lama(fid_transaksi NUMBER)
RETURN NUMBER as lama_inap NUMBER;
BEGIN
  SELECT FLOOR(tgl_checkout - tgl_checkin) INTO lama_inap
  FROM TRANSAKSI_sewa
  WHERE id_transaksi = fid_transaksi;
RETURN lama_inap;
END;

select distinct(lama(max(id_transaksi))) from transaksi_sewa;
--------------------------------------------------------------
--Procedure---------------------------------------------------
create or replace PROCEDURE masuk_data (pid_tamu IN NUMBER, pnama_tamu IN CHAR, palamat_tamu IN CHAR, ptelp_tamu IN CHAR, ptgl_lahir IN DATE, ptgl_checkin IN DATE, ptgl_checkout IN DATE, pno_kamar IN NUMBER)
IS
BEGIN
  INSERT INTO tamu VALUES (pid_tamu,pnama_tamu,palamat_tamu,ptelp_tamu,ptgl_lahir);
  INSERT INTO transaksi_sewa (id_transaksi,id_tamu,tgl_checkin,tgl_checkout,no_kamar,total,status) VALUES (transaksi_seq.nextval, pid_tamu, ptgl_checkin, ptgl_checkout, pno_kamar, 0, 0);
END masuk_data;

CALL masuk_data ('5114100007','bonar','jakarta','08123456123','01-JAN-1991','23-DEC-2016', '24-DEC-2016', '2311');

create or replace PROCEDURE masuk_data2 (pid_tamu IN NUMBER, ptgl_checkin IN DATE, ptgl_checkout  IN DATE, pno_kamar IN NUMBER)
IS 
BEGIN
  insert into transaksi_sewa (id_transaksi, id_tamu, tgl_checkin, tgl_checkout, no_kamar, total, status) VALUES (transaksi_seq.nextval, pid_tamu, ptgl_checkin, ptgl_checkout, pno_kamar, 0, 0);
END masuk_data2;

CALL masuk_data2 ('5114100005', '15-MAY-2016', '16-MAY-2016', 3101);
---------------------------------------------------------------
--Trigger------------------------------------------------------
create or replace trigger trigger1 
after update 
  on transaksi_sewa
  for each row
begin
  insert into log_transaksi
  values(log_trans_seq.nextval, :old.id_transaksi, 'UPDATE DATA');
end;

create or replace trigger trigger3
after insert
  on transaksi_sewa
  for each row
begin
  insert into log_transaksi
  values (log_trans_seq.nextval, :old.id_tamu, 'PESAN KAMAR');
end;

drop trigger trigger2;

update transaksi_sewa set no_kamar = 3103 where id_transaksi = 60028;
---------------------------------------------------------------
--view & index-------------------------------------------------
create index kamar_index ON kamar (id_wisma);

create view nomorkamar3 AS
SELECT no_kamar
from kamar
WHERE no_kamar not in (select no_kamar
                       from transaksi_sewa
                       where id_transaksi in (select id_transaksi
                                              from transaksi_sewa
                                              where (tgl_checkin in '06-NOV-2015' and tgl_checkout not in '06-NOV-2015')
                                              or (tgl_checkin not in '09-NOV-2015' and tgl_checkout in '09-NOV-2015')
                                              or (tgl_checkin > '06-NOV-2015' and tgl_checkout < '09-NOV-2015')
                                              or (tgl_checkin < '06-NOV-2015' and (tgl_checkout < '09-NOV-2015' and tgl_checkout > '06-NOV-2015'))
                                              or ((tgl_checkin > '06-NOV-2015' and tgl_checkin < '09-NOV-2015') and tgl_checkout > '09-NOV-2015')))
      and id_wisma = 3;
      


--5114100110-RAFIAR RAHMANSYAH--------------------
--Procedure---------------------------------------
CREATE OR REPLACE PROCEDURE INSERT_DENDA ( id_t IN NUMBER, id_f IN NUMBER) AS
  BEGIN
    insert into DENDA_TRANSAKSI (ID_DENDA, ID_TRANSAKSI, ID_FASILITAS) 
    values (denda_seq.nextval, id_t, id_f);
  END INSERT_DENDA;
--------------------------------------------------
--FUNCTION----------------------------------------
  CREATE OR REPLACE FUNCTION TOTAL_BAYAR (id_t number)RETURN NUMBER AS
total_b NUMBER;
denda number;
cari number;
BEGIN
  select (i.lama_inap*j.harga_jenis) into total_b
  from 
        (select t.id_transaksi,(t.tgl_checkout - t.tgl_checkin) as lama_inap, k.id_jenis
         from transaksi_sewa t
         left join kamar k
         on t.no_kamar = k.no_kamar
         where t.id_transaksi = id_t ) i
    left join jenis_kamar j
    on i.id_jenis = j.id_jenis;
    select  case
          when id_transaksi is not null 
          THEN sum(f.harga_fasilitas) 
          else 0
          end as denda_t into denda
    from denda_transaksi d
    Left join fasilitas_kamar f
    on d.id_fasilitas = f.id_fasilitas
    where d.id_transaksi = id_t
    group by d.id_transaksi;
  total_b := total_b + denda;
--  update transaksi_sewa set total = total_b where id_transaksi = id_t;
  RETURN total_b;
END TOTAL_BAYAR;

select distinct(total_bayar(60087)) from transaksi_sewa;  
-------------------------------------------------------------
--Trigger----------------------------------------------------
  CREATE OR REPLACE TRIGGER DENDA_T 
AFTER INSERT ON DENDA_TRANSAKSI
FOR EACH ROW
BEGIN

INSERT INTO log_transaksi VALUES(log_trans_seq.NEXTVAL,:NEW.ID_TRANSAKSI,'Merusak Fasilitas');
  NULL;
END;
-------------------------------------------------------------
--View-------------------------------------------------------
create or replace FORCE VIEW REKAP_P_05_2016 ("nama_petugas","melayani") AS select p.nama_petugas, case
  when p.melayani is not null
  then p.melayani
  else 0
  end as melayani
FROM (select nama_petugas, melayanin_pada_bulan(id_petugas, 6, 2016) as melayani FROM petugas)p
ORDER BY p.melayani;
--------------------------------------------------------------
--Index-------------------------------------------------------
CREATE INDEX INDEX_JENIS_KAMAR ON KAMAR ("id_jenis", "no_kamar");

  

--5114100109--NAFIAR RAHMANSYAH------------------------------
--Procedure--------------------------------------------------
create or replace procedure ubah_status (pid_transaksi number, pid_denda NUMBER)
as
begin
  UPDATE transaksi_sewa SET total = pid_denda WHERE id_transaksi = pid_transaksi;
  update transaksi_sewa set status = 1 where id_transaksi = pid_transaksi;
end ubah_status;
-------------------------------------------------------------
--Function---------------------------------------------------
create or replace
FUNCTION rata2(bulan int, tahun int)
RETURN NUMBER as rata2 float;
BEGIN
  select avg(count(*)) into rata2
  from (select id_transaksi, extract(month from tgl_checkout) as bln, extract(year from tgl_checkout) as thn, no_kamar as no_kamar from transaksi_sewa) t
  where t.bln = bulan
  and t.thn = tahun
  group by t.no_kamar;
RETURN rata2;
END;

select w.nama_wisma as wisma, k.no_kamar as no_kamar, j.nama_jenis as tipe
from (select no_kamar          
      from transaksi_sewa
      group by no_kamar
      having count(*) > (select avg(rata2(5, 2016)) 
                         from transaksi_sewa)) t, kamar k, wisma w, jenis_kamar j
where t.no_kamar = k.no_kamar
and k.id_wisma = w.id_wisma
and k.id_jenis = j.id_jenis
order by w.nama_wisma;
-------------------------------------------------------------
--Trigger----------------------------------------------------
create or replace trigger harga_kamar
after update on jenis_kamar
FOR EACH ROW
WHEN (new.harga_jenis <> old.harga_jenis)
begin
    insert into log_harga_kamar values(log_harga_seq.nextval,:OLD.id_JENIS, :OLD.harga_jenis , :NEW.harga_jenis);  
end;
-------------------------------------------------------------
--View-------------------------------------------------------
  create view data_kamar AS
  select id_transaksi, no_kamar
  from transaksi_sewa
  where (tgl_checkin in '29-MAY-2016' and tgl_checkout not in '29-MAY-2016')
  or (tgl_checkin not in '30-MAY-2016' and tgl_checkout in '30-MAY-2016')
  or (tgl_checkin > '29-MAY-2016' and tgl_checkout < '30-MAY-2016')
  or (tgl_checkin < '29-MAY-2016' and (tgl_checkout < '30-MAY-2016' and tgl_checkout > '29-MAY-2016'))
  or ((tgl_checkin > '29-MAY-2016' and tgl_checkin < '30-MAY-2016') and tgl_checkout > '30-MAY-2016');
--------------------------------------------------------------
--Index-------------------------------------------------------  
create index data_kamar_ix on fasilitas_kamar(id_jenis);