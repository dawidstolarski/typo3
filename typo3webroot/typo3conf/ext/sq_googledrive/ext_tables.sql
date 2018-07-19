#
# Table structure for table 'fe_groups'
#
CREATE TABLE fe_groups (

	customerlogo int(11) unsigned NOT NULL default '0',
	consultantid int(11) DEFAULT '0' NOT NULL,
	searchresultpage int(11) DEFAULT '0' NOT NULL,
	googledrivesettings text NOT NULL,

	tx_extbase_type varchar(255) DEFAULT '' NOT NULL,

);
