CREATE TABLE tt_content
(
	timeline_items int(11) default 0 not null,
);

CREATE TABLE tx_ottimeline_timeline_item
(
	parent_id    int(11)      default 0  not null,
	parent_table varchar(50)  default '' not null,
	title        varchar(255) default '' not null,
	text         text         default '' not null,
	images       int(11)      default 0  not null,
);
