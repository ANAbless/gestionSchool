USE [GESTIONSCHOOL]
GO
/****** Object:  Table [dbo].[t_matiere]    Script Date: 11/07/2023 15:59:18 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[t_menus](
	[id] [int] IDENTITY(1,1) PRIMARY KEY NOT NULL,
	[lib_menu] [nvarchar](25) NULL,
	[created] [datetime] NULL,
	[updated] [datetime] NULL
)

CREATE TABLE [dbo].[t_sous_menus](
	[id] [int] IDENTITY(1,1) PRIMARY KEY NOT NULL,
	[id_menu] [int] REFERENCES t_menus (id)  NOT NULL,
	[lib_sous_menu] [nvarchar](25) NULL,
	[created] [datetime] NULL,
	[updated] [datetime] NULL
)

CREATE TABLE [dbo].[t_image](
	[id] [int] IDENTITY(1,1) PRIMARY KEY NOT NULL,
	[denome] [nvarchar](50)  NULL,
	[created] [datetime] NULL,
	[updated] [datetime] NULL
)

CREATE TABLE [dbo].[t_personnel](
	[id] [int] IDENTITY(1,1) PRIMARY KEY NOT NULL,
	[id_image] [int] REFERENCES t_image (id)  NOT NULL,
	[nom] [nvarchar](25)  NULL,
	[prenom] [nvarchar](50)  NULL,
	[fonction] [nvarchar](50)  NULL,
	[numero] [nvarchar](25)  NULL,
	[created] [datetime] NULL,
	[updated] [datetime] NULL
)

CREATE TABLE [dbo].[t_reseaux_sociaux](
	[id] [int] IDENTITY(1,1) PRIMARY KEY NOT NULL,
	[id_personne] [int] REFERENCES t_personnel (id)  NOT NULL,
	[facebook] [nvarchar](50)  NULL,
	[link] [nvarchar](50)  NULL,
	[instag] [nvarchar](50)  NULL,
	[Twitter] [nvarchar](50)  NULL,
	[created] [datetime] NULL,
	[updated] [datetime] NULL
)



INSERT INTO t_menus (lib_menu, created)
VALUES ('home', GETDATE());
INSERT INTO t_menus (lib_menu, created)
VALUES ('about', GETDATE());
INSERT INTO t_menus (lib_menu, created)
VALUES ('courses', GETDATE());
INSERT INTO t_menus (lib_menu, created)
VALUES ('trainers', GETDATE());
INSERT INTO t_menus (lib_menu, created)
VALUES ('events', GETDATE());
INSERT INTO t_menus (lib_menu, created)
VALUES ('pricing', GETDATE());
INSERT INTO t_menus (lib_menu, created)
VALUES ('drop down', GETDATE());


INSERT INTO t_sous_menus (id_menu ,lib_sous_menu, created)
VALUES ( 7, 'drop down 1', GETDATE());
INSERT INTO t_sous_menus (id_menu ,lib_sous_menu, created)
VALUES ( 7, 'drop down 2', GETDATE());
INSERT INTO t_sous_menus (id_menu ,lib_sous_menu, created)
VALUES ( 7, 'courses 3', GETDATE());
INSERT INTO t_sous_menus (id_menu ,lib_sous_menu, created)
VALUES ( 7, 'trainers 4', GETDATE());
INSERT INTO t_sous_menus (id_menu ,lib_sous_menu, created)
VALUES ( 7, 'events 5', GETDATE());
INSERT INTO t_sous_menus (id_menu ,lib_sous_menu, created)
VALUES ( 7, 'pricing 6', GETDATE());
INSERT INTO t_sous_menus (id_menu ,lib_sous_menu, created)
VALUES ( 7, 'drop down 7', GETDATE());