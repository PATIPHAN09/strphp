CREATE TABLE `incpt` (
  `ID` int(10) NOT NULL,
  `First_Name` varchar(100) NOT NULL,
  `Last_Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` int(100) NOT NULL,
  `File` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO INCPT (HN, INCDATE, INCTIME, ORDERCODE, INCOME, ITEMNO, ITEMNOSUB, PRFORDERCODE, AN, VN, FN, PRVNO, PTTYPE, PTTYPEEXT, DCT, OVERTIME, RFRLCT, ACTLCT, PAIDST, INCAMT, RFNDAMT, VIPAMT, APPAMT, WAIVEAMT, DSCAMT, REMAMT, RCPTAMT, TRNINFAN, FINREFNO, REFNO, QTY, DSCNO, WAIVENO, ARREARNO, ARNO, CANCELSTF, CANCELDATE, CANCELRAS, FIRSTSTF, FIRSTDATE, LASTSTF, LASTDATE, FINLCT, COMPUTERNAME, COMPUTERLCT, ASSAMBLY, INCGRP, SALERATE, RFINREFNO, RFINLCT, ICARSTATUS, NBFLAG, RCPTLCT, CASHFREQNO, ARRCPTLCT, ARFREQNO, SPCFLAG, EXPDATE, EXPTIME, FEXP_REF, EXPSTF, WARD, ROOMNO, BEDNO, PATTYPE, TRANOIFLAG, EXTRAFLAG, FPHCASHFLAG, PAIDINFTRNAMT, SINVNO, C_DEPT, C_SUB_DEPT, C_DEPT_UNIT, TIMESEQ, WELFAREAMT, DSCID, S_SEQ, NETCOST, SETCOST, MEDITEM, SENDAMT, ICSEND, INCOMETYPE, INCOMEGRP, WELFAREST) VALUES(50075763, TIMESTAMP '2021-09-16 00:00:00.000000', 71955, 7000000087, 'CT001', 1, 1, 7000000087, NULL, 641900525, 641901628, 165, 400, '1202', 5980, 2, 2704101, 2704101, 10, 90, 90, 0, 0, 0, 0, 0, 0, NULL, 6400736017, 29, 1, NULL, NULL, NULL, 99, NULL, NULL, NULL, 23716, TIMESTAMP '2021-09-16 07:19:56.000000', 23716, TIMESTAMP '2021-09-16 07:20:28.000000', 10160, 'PR04F136^^I-1', 90104201, 'fin_i_oapp', 70, 90, NULL, NULL, NULL, NULL, 40000422, 6400105787, 40000422, 6400105787, NULL, TIMESTAMP '2021-09-16 00:00:00.000000', 72000, 'CH-255680/2564', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 640000001999665, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO INCPT (HN, INCDATE, INCTIME, ORDERCODE, INCOME, ITEMNO, ITEMNOSUB, PRFORDERCODE, AN, VN, FN, PRVNO, PTTYPE, PTTYPEEXT, DCT, OVERTIME, RFRLCT, ACTLCT, PAIDST, INCAMT, RFNDAMT, VIPAMT, APPAMT, WAIVEAMT, DSCAMT, REMAMT, RCPTAMT, TRNINFAN, FINREFNO, REFNO, QTY, DSCNO, WAIVENO, ARREARNO, ARNO, CANCELSTF, CANCELDATE, CANCELRAS, FIRSTSTF, FIRSTDATE, LASTSTF, LASTDATE, FINLCT, COMPUTERNAME, COMPUTERLCT, ASSAMBLY, INCGRP, SALERATE, RFINREFNO, RFINLCT, ICARSTATUS, NBFLAG, RCPTLCT, CASHFREQNO, ARRCPTLCT, ARFREQNO, SPCFLAG, EXPDATE, EXPTIME, FEXP_REF, EXPSTF, WARD, ROOMNO, BEDNO, PATTYPE, TRANOIFLAG, EXTRAFLAG, FPHCASHFLAG, PAIDINFTRNAMT, SINVNO, C_DEPT, C_SUB_DEPT, C_DEPT_UNIT, TIMESEQ, WELFAREAMT, DSCID, S_SEQ, NETCOST, SETCOST, MEDITEM, SENDAMT, ICSEND, INCOMETYPE, INCOMEGRP, WELFAREST) VALUES(50075763, TIMESTAMP '2021-09-16 00:00:00.000000', 71955, 7000000105, 'CT019', 1, 1, 7000000105, NULL, 641900525, 641901628, 165, 400, '1202', 5980, 2, 2704101, 2704101, 10, 40, 40, 0, 0, 0, 0, 0, 0, NULL, 6400736017, 28, 1, NULL, NULL, NULL, 99, NULL, NULL, NULL, 23716, TIMESTAMP '2021-09-16 07:19:56.000000', 23716, TIMESTAMP '2021-09-16 07:20:28.000000', 10160, 'PR04F136^^I-1', 90104201, 'fin_i_oapp', 70, 40, NULL, NULL, NULL, NULL, 40000422, 6400105787, 40000422, 6400105787, NULL, TIMESTAMP '2021-09-16 00:00:00.000000', 72000, 'CC-362825/2564', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 640000001999665, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);


  CREATE TABLE `INCPT` 
   (	`HN` int(10) NOT NULL , 
	`INCDATE` DATE NOT NULL , 
	`INCTIME` int(7) NOT NULL , 
	`ORDERCODE` int(15) NOT NULL , 
	`INCOME` VARCHAR(20) NOT NULL , 
	`ITEMNO` int(10) NOT NULL , 
	`ITEMNOSUB` int(10) NOT NULL , 
	`PRFORDERCODE` int(15), 
	`AN` int(10), 
	`VN` int(10), 
	`FN` int(10), 
	`PRVNO` int(10), 
	`PTTYPE` int(5) NOT NULL , 
	`PTTYPEEXT` VARCHAR(4) NOT NULL , 
	`DCT` int(10), 
	`OVERTIME` int(3) NOT NULL , 
	`RFRLCT` int(10), 
	`ACTLCT` int(10), 
	`PAIDST` int(5) NOT NULL , 
	`INCAMT` int(16) NOT NULL , 
	`RFNDAMT` int(16) NOT NULL , 
	`VIPAMT` int(10), 
	`APPAMT` int(16) NOT NULL , 
	`WAIVEAMT` int(16) NOT NULL , 
	`DSCAMT` int(16) NOT NULL , 
	`REMAMT` int(16) NOT NULL , 
	`RCPTAMT` int(16) NOT NULL , 
	`TRNINFAN` int(10), 
	`FINREFNO` int(10), 
	`REFNO` int(10), 
	`QTY` int(5), 
	`DSCNO` int(10), 
	`WAIVENO` int(10), 
	`ARREARNO` int(10), 
	`ARNO` int(10), 
	`CANCELSTF` int(10), 
	`CANCELDATE` DATE, 
	`CANCELRAS` int(5), 
	`FIRSTSTF` int(10), 
	`FIRSTDATE` DATE, 
	`LASTSTF` int(10), 
	`LASTDATE` DATE, 
	`FINLCT` int(5), 
	`COMPUTERNAME` VARCHAR(20), 
	`COMPUTERLCT` int(10), 
	`ASSAMBLY` VARCHAR(40), 
	`INCGRP` int(3), 
	`SALERATE` int(10) DEFAULT 0, 
	`RFINREFNO` int(10), 
	`RFINLCT` int(5), 
	`ICARSTATUS` int(2), 
	`NBFLAG` VARCHAR(4), 
	`RCPTLCT` int(10), 
	`CASHFREQNO` int(10), 
	`ARRCPTLCT` int(10), 
	`ARFREQNO` int(10), 
	`SPCFLAG` int(1), 
	`EXPDATE` DATE, 
	`EXPTIME` int(6), 
	`FEXP_REF` VARCHAR(20), 
	`EXPSTF` int(10), 
	`WARD` int(10), 
	`ROOMNO` VARCHAR(10), 
	`BEDNO` VARCHAR(20), 
	`PATTYPE` int(2), 
	`TRANOIFLAG` VARCHAR(1), 
	`EXTRAFLAG` VARCHAR(4), 
	`FPHCASHFLAG` int(10), 
	`PAIDINFTRNAMT` int(16), 
	`SINVNO` int(15), 
	`C_DEPT` CHAR(2), 
	`C_SUB_DEPT` CHAR(2), 
	`C_DEPT_UNIT` CHAR(6), 
	`TIMESEQ` int(2), 
	`WELFAREAMT` int(16) DEFAULT 0, 
	`DSCID` int(3), 
	`S_SEQ` int(10), 
	`NETCOST` int(12), 
	`SETCOST` int(10), 
	`MEDITEM` int(10), 
	`SENDAMT` int(16), 
	`ICSEND` int(5), 
	`INCOMETYPE` int(5), 
	`INCOMEGRP` int(8), 
	`WELFAREST` int(10))


===============================================================================
===============================================================================
===============================================================================
===============================================================================
===============================================================================
===============================================================================


    select cuh.ipt.rgtdate		
,cuh.ipt.hn		
,cuh.ipt.an		
		
,cuh.pt.dspname		
		
,nvl(		
		
		
(	select max(cuh.pttypeext.name )	
	from cuh.incprvlg,cuh.pttypeext 	
	where cuh.incprvlg.pttypeext = cuh.pttypeext.pttypeext 	
		and cuh.incprvlg.hn =cuh.ipt.hn
		and cuh.incprvlg.an = cuh.ipt.an
		and cuh.incprvlg.canceldate is null
		and cuh.incprvlg.subtype = 10
)		
		
,'ชำระเงินเอง') as pttypext_name		
		
		
,cuh.dct.name as doc_name
,cuh.dct.hcode
, cuh.dct.deptname

		
,(nvl((select max('[' || cuh.icd10.icd10 || ']' || cuh.icd10.name )		
from  cuh.iptsumdiag ,cuh.icd10 		
where cuh.iptsumdiag.icd10 = cuh.icd10.icd10 		
and cuh.iptsumdiag.diagtype = 1		
and cuh.iptsumdiag.diagorder = 1		
and cuh.iptsumdiag.itemno = 1		
and cuh.iptsumdiag.an = cuh.ipt.an) , cuh.ipt.prediag)) as diag		

,(nvl((select max('[' || cuh.icd9cm.icd9cm || ']' || cuh.icd9cm.name )		
from  cuh.iptsumoprt ,cuh.icd9cm 		
where cuh.iptsumoprt.icd9cm = cuh.icd9cm.icd9cm 		
and cuh.iptsumoprt.diagorder = 1		
and cuh.iptsumoprt.itemno = 1		
and cuh.iptsumoprt.an = cuh.ipt.an) , '')) as icd9		
		
		
,cuh.ward.name as ward_name		
		
,sum(case when cuh.incpt.pttype <> 10 then cuh.incpt.incamt else 0 end) as cont_amt		
,sum(case when cuh.incpt.pttype = 10 then cuh.incpt.incamt else 0 end) as pay_amt		
,sum(cuh.incpt.incamt) as total_amt		
		
		
,sum(case when cuh.arincome.incgrpipd = 10 then cuh.incpt.incamt else 0 end) as grp01		
,sum(case when cuh.arincome.incgrpipd = 20 then cuh.incpt.incamt else 0 end) as grp02		
,sum(case when cuh.arincome.incgrpipd = 30 then cuh.incpt.incamt else 0 end) as grp03		
,sum(case when cuh.arincome.incgrpipd = 40 then cuh.incpt.incamt else 0 end) as grp04		
,sum(case when cuh.arincome.incgrpipd = 50 then cuh.incpt.incamt else 0 end) as grp05		
,sum(case when cuh.arincome.incgrpipd = 60 then cuh.incpt.incamt else 0 end) as grp06		
,sum(case when cuh.arincome.incgrpipd = 70 then cuh.incpt.incamt else 0 end) as grp07		
,sum(case when cuh.arincome.incgrpipd = 80 then cuh.incpt.incamt else 0 end) as grp08		
,sum(case when cuh.arincome.incgrpipd = 90 then cuh.incpt.incamt else 0 end) as grp09		
,sum(case when cuh.arincome.incgrpipd = 100 then cuh.incpt.incamt else 0 end) as grp10		
,sum(case when cuh.arincome.incgrpipd = 110 then cuh.incpt.incamt else 0 end) as grp11		
,sum(case when cuh.arincome.incgrpipd = 120 then cuh.incpt.incamt else 0 end) as grp12		
,sum(case when cuh.arincome.incgrpipd = 130 then cuh.incpt.incamt else 0 end) as grp13		
,sum(case when cuh.arincome.incgrpipd = 140 then cuh.incpt.incamt else 0 end) as grp14		
,sum(case when cuh.arincome.incgrpipd = 150 then cuh.incpt.incamt else 0 end) as grp15		
,sum(case when cuh.arincome.incgrpipd = 160 then cuh.incpt.incamt else 0 end) as grp16		
,sum(case when cuh.arincome.incgrpipd = 170 then cuh.incpt.incamt else 0 end) as grp17		
,sum(case when nvl( cuh.arincome.incgrpipd,180) = 180 then cuh.incpt.incamt else 0 end) as grp18		
		
		
,sum(case when cuh.masterorder.dfflag = 1 and cuh.masterorder.income not in ('DF005','DF014','DF015','DF017','DF021','DF023','DF025','DF027','DF029','DF031','DF037') then cuh.incpt.incamt else 0 end ) as df_dct_amt		
,sum(case when cuh.masterorder.dfflag = 1 and cuh.masterorder.income  in ('DF005','DF014','DF015','DF017','DF021','DF023','DF025','DF027','DF029','DF031','DF037') then cuh.incpt.incamt else 0 end ) as df_staff_amt		
,sum(case when cuh.masterorder.dfflag = 1 then cuh.incpt.incamt else 0 end ) as df_all_amt		
		
		
from cuh.ipt		
	left outer join cuh.ward on cuh.ipt.ward = cuh.ward.ward	
	left outer join cuh.iptsummary on cuh.ipt.an = cuh.iptsummary.an and cuh.ipt.hn = cuh.iptsummary.hn
	left outer join cuh.dct on nvl(cuh.iptsummary.staffdct,cuh.ipt.dct) = cuh.dct.dct	
 
,cuh.incpt		
		
,cuh.masterorder		
	left outer join cuh.arincome on  cuh.masterorder.ordercode = cuh.arincome.ordercode and cuh.arincome.inctype = 10	
,cuh.pt		
where cuh.ipt.hn = cuh.pt.hn 		
and cuh.ipt.spcclinicflag = 'Y'		
and cuh.ipt.hn = cuh.incpt.hn		
and cuh.ipt.an = cuh.incpt.an		
and cuh.incpt.ordercode = cuh.masterorder.ordercode		
and cuh.incpt.itemno >0		
and cuh.incpt.incamt <> 0		
and cuh.incpt.paidst not in (92,95)		
		
		
and cuh.ipt.rgtdate >= to_date('01/03/2020','dd/mm/yyyy')		
and cuh.ipt.rgtdate <= to_date('31/03/2020','dd/mm/yyyy')		
		
		
group by cuh.ipt.rgtdate		
,cuh.ipt.hn		
,cuh.ipt.an		
,cuh.pt.dspname			
,cuh.dct.name
,cuh.dct.hcode	
, cuh.dct.deptname
,cuh.ipt.prediag 		
,cuh.ward.name		
		
order by  cuh.ipt.rgtdate		
,cuh.ipt.an		

;		

 