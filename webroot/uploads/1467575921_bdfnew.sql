/****** Object:  ForeignKey [FK_Agencias_Estados]    Script Date: 11/22/2014 11:37:51 ******/
IF  EXISTS (SELECT * FROM sys.foreign_keys WHERE object_id = OBJECT_ID(N'[dbo].[FK_Agencias_Estados]') AND parent_object_id = OBJECT_ID(N'[dbo].[Agencias]'))
ALTER TABLE [dbo].[Agencias] DROP CONSTRAINT [FK_Agencias_Estados]
GO
/****** Object:  ForeignKey [FK_Agencias_HorariosAtencion]    Script Date: 11/22/2014 11:37:51 ******/
IF  EXISTS (SELECT * FROM sys.foreign_keys WHERE object_id = OBJECT_ID(N'[dbo].[FK_Agencias_HorariosAtencion]') AND parent_object_id = OBJECT_ID(N'[dbo].[Agencias]'))
ALTER TABLE [dbo].[Agencias] DROP CONSTRAINT [FK_Agencias_HorariosAtencion]
GO
/****** Object:  ForeignKey [FK_Agencias_Locaciones]    Script Date: 11/22/2014 11:37:51 ******/
IF  EXISTS (SELECT * FROM sys.foreign_keys WHERE object_id = OBJECT_ID(N'[dbo].[FK_Agencias_Locaciones]') AND parent_object_id = OBJECT_ID(N'[dbo].[Agencias]'))
ALTER TABLE [dbo].[Agencias] DROP CONSTRAINT [FK_Agencias_Locaciones]
GO
/****** Object:  ForeignKey [FK_Agencias_Servidores]    Script Date: 11/22/2014 11:37:51 ******/
IF  EXISTS (SELECT * FROM sys.foreign_keys WHERE object_id = OBJECT_ID(N'[dbo].[FK_Agencias_Servidores]') AND parent_object_id = OBJECT_ID(N'[dbo].[Agencias]'))
ALTER TABLE [dbo].[Agencias] DROP CONSTRAINT [FK_Agencias_Servidores]
GO
/****** Object:  ForeignKey [FK_Cajeros_Estados]    Script Date: 11/22/2014 11:37:51 ******/
IF  EXISTS (SELECT * FROM sys.foreign_keys WHERE object_id = OBJECT_ID(N'[dbo].[FK_Cajeros_Estados]') AND parent_object_id = OBJECT_ID(N'[dbo].[Cajeros]'))
ALTER TABLE [dbo].[Cajeros] DROP CONSTRAINT [FK_Cajeros_Estados]
GO
/****** Object:  ForeignKey [FK_Cajeros_Locaciones]    Script Date: 11/22/2014 11:37:51 ******/
IF  EXISTS (SELECT * FROM sys.foreign_keys WHERE object_id = OBJECT_ID(N'[dbo].[FK_Cajeros_Locaciones]') AND parent_object_id = OBJECT_ID(N'[dbo].[Cajeros]'))
ALTER TABLE [dbo].[Cajeros] DROP CONSTRAINT [FK_Cajeros_Locaciones]
GO
/****** Object:  ForeignKey [FK_Cajeros_Monedas]    Script Date: 11/22/2014 11:37:51 ******/
IF  EXISTS (SELECT * FROM sys.foreign_keys WHERE object_id = OBJECT_ID(N'[dbo].[FK_Cajeros_Monedas]') AND parent_object_id = OBJECT_ID(N'[dbo].[Cajeros]'))
ALTER TABLE [dbo].[Cajeros] DROP CONSTRAINT [FK_Cajeros_Monedas]
GO
/****** Object:  ForeignKey [FK_Cajeros_Servidores]    Script Date: 11/22/2014 11:37:51 ******/
IF  EXISTS (SELECT * FROM sys.foreign_keys WHERE object_id = OBJECT_ID(N'[dbo].[FK_Cajeros_Servidores]') AND parent_object_id = OBJECT_ID(N'[dbo].[Cajeros]'))
ALTER TABLE [dbo].[Cajeros] DROP CONSTRAINT [FK_Cajeros_Servidores]
GO
/****** Object:  ForeignKey [FK_HorarioAtencionDetalle_HorariosAtencion]    Script Date: 11/22/2014 11:37:51 ******/
IF  EXISTS (SELECT * FROM sys.foreign_keys WHERE object_id = OBJECT_ID(N'[dbo].[FK_HorarioAtencionDetalle_HorariosAtencion]') AND parent_object_id = OBJECT_ID(N'[dbo].[HorarioAtencionDetalle]'))
ALTER TABLE [dbo].[HorarioAtencionDetalle] DROP CONSTRAINT [FK_HorarioAtencionDetalle_HorariosAtencion]
GO
/****** Object:  ForeignKey [FK_HorariosAtencion_Agencias]    Script Date: 11/22/2014 11:37:51 ******/
IF  EXISTS (SELECT * FROM sys.foreign_keys WHERE object_id = OBJECT_ID(N'[dbo].[FK_HorariosAtencion_Agencias]') AND parent_object_id = OBJECT_ID(N'[dbo].[HorariosAtencion]'))
ALTER TABLE [dbo].[HorariosAtencion] DROP CONSTRAINT [FK_HorariosAtencion_Agencias]
GO
/****** Object:  StoredProcedure [dbo].[getCajeroId]    Script Date: 11/22/2014 11:37:51 ******/
IF  EXISTS (SELECT * FROM sys.objects WHERE object_id = OBJECT_ID(N'[dbo].[getCajeroId]') AND type in (N'P', N'PC'))
DROP PROCEDURE [dbo].[getCajeroId]
GO
/****** Object:  StoredProcedure [dbo].[getCajerosCriterio]    Script Date: 11/22/2014 11:37:51 ******/
IF  EXISTS (SELECT * FROM sys.objects WHERE object_id = OBJECT_ID(N'[dbo].[getCajerosCriterio]') AND type in (N'P', N'PC'))
DROP PROCEDURE [dbo].[getCajerosCriterio]
GO
/****** Object:  StoredProcedure [dbo].[getPersonasEnColaAgencia]    Script Date: 11/22/2014 11:37:51 ******/
IF  EXISTS (SELECT * FROM sys.objects WHERE object_id = OBJECT_ID(N'[dbo].[getPersonasEnColaAgencia]') AND type in (N'P', N'PC'))
DROP PROCEDURE [dbo].[getPersonasEnColaAgencia]
GO
/****** Object:  Table [dbo].[Cajeros]    Script Date: 11/22/2014 11:37:51 ******/
IF  EXISTS (SELECT * FROM sys.objects WHERE object_id = OBJECT_ID(N'[dbo].[Cajeros]') AND type in (N'U'))
DROP TABLE [dbo].[Cajeros]
GO
/****** Object:  StoredProcedure [dbo].[getAgenteId]    Script Date: 11/22/2014 11:37:51 ******/
IF  EXISTS (SELECT * FROM sys.objects WHERE object_id = OBJECT_ID(N'[dbo].[getAgenteId]') AND type in (N'P', N'PC'))
DROP PROCEDURE [dbo].[getAgenteId]
GO
/****** Object:  StoredProcedure [dbo].[getAgentesCriterios]    Script Date: 11/22/2014 11:37:51 ******/
IF  EXISTS (SELECT * FROM sys.objects WHERE object_id = OBJECT_ID(N'[dbo].[getAgentesCriterios]') AND type in (N'P', N'PC'))
DROP PROCEDURE [dbo].[getAgentesCriterios]
GO
/****** Object:  Table [dbo].[Agentes]    Script Date: 11/22/2014 11:37:51 ******/
IF  EXISTS (SELECT * FROM sys.objects WHERE object_id = OBJECT_ID(N'[dbo].[Agentes]') AND type in (N'U'))
DROP TABLE [dbo].[Agentes]
GO
/****** Object:  StoredProcedure [dbo].[getAgenciaId]    Script Date: 11/22/2014 11:37:51 ******/
IF  EXISTS (SELECT * FROM sys.objects WHERE object_id = OBJECT_ID(N'[dbo].[getAgenciaId]') AND type in (N'P', N'PC'))
DROP PROCEDURE [dbo].[getAgenciaId]
GO
/****** Object:  Table [dbo].[Ciudades]    Script Date: 11/22/2014 11:37:51 ******/
IF  EXISTS (SELECT * FROM sys.objects WHERE object_id = OBJECT_ID(N'[dbo].[Ciudades]') AND type in (N'U'))
DROP TABLE [dbo].[Ciudades]
GO
/****** Object:  StoredProcedure [dbo].[getAgenciasCriterios]    Script Date: 11/22/2014 11:37:51 ******/
IF  EXISTS (SELECT * FROM sys.objects WHERE object_id = OBJECT_ID(N'[dbo].[getAgenciasCriterios]') AND type in (N'P', N'PC'))
DROP PROCEDURE [dbo].[getAgenciasCriterios]
GO
/****** Object:  Table [dbo].[Agencias]    Script Date: 11/22/2014 11:37:51 ******/
IF  EXISTS (SELECT * FROM sys.objects WHERE object_id = OBJECT_ID(N'[dbo].[Agencias]') AND type in (N'U'))
DROP TABLE [dbo].[Agencias]
GO
/****** Object:  Table [dbo].[Estados]    Script Date: 11/22/2014 11:37:51 ******/
IF  EXISTS (SELECT * FROM sys.objects WHERE object_id = OBJECT_ID(N'[dbo].[Estados]') AND type in (N'U'))
DROP TABLE [dbo].[Estados]
GO
/****** Object:  Table [dbo].[Locaciones]    Script Date: 11/22/2014 11:37:51 ******/
IF  EXISTS (SELECT * FROM sys.objects WHERE object_id = OBJECT_ID(N'[dbo].[Locaciones]') AND type in (N'U'))
DROP TABLE [dbo].[Locaciones]
GO
/****** Object:  Table [dbo].[MantenimientosProgramados]    Script Date: 11/22/2014 11:37:51 ******/
IF  EXISTS (SELECT * FROM sys.objects WHERE object_id = OBJECT_ID(N'[dbo].[MantenimientosProgramados]') AND type in (N'U'))
DROP TABLE [dbo].[MantenimientosProgramados]
GO
/****** Object:  Table [dbo].[Monedas]    Script Date: 11/22/2014 11:37:51 ******/
IF  EXISTS (SELECT * FROM sys.objects WHERE object_id = OBJECT_ID(N'[dbo].[Monedas]') AND type in (N'U'))
DROP TABLE [dbo].[Monedas]
GO
/****** Object:  Table [dbo].[ParametrosGenerales]    Script Date: 11/22/2014 11:37:51 ******/
IF  EXISTS (SELECT * FROM sys.objects WHERE object_id = OBJECT_ID(N'[dbo].[ParametrosGenerales]') AND type in (N'U'))
DROP TABLE [dbo].[ParametrosGenerales]
GO
/****** Object:  Table [dbo].[Servidores]    Script Date: 11/22/2014 11:37:51 ******/
IF  EXISTS (SELECT * FROM sys.objects WHERE object_id = OBJECT_ID(N'[dbo].[Servidores]') AND type in (N'U'))
DROP TABLE [dbo].[Servidores]
GO
/****** Object:  Table [dbo].[Ticket]    Script Date: 11/22/2014 11:37:51 ******/
IF  EXISTS (SELECT * FROM sys.objects WHERE object_id = OBJECT_ID(N'[dbo].[Ticket]') AND type in (N'U'))
DROP TABLE [dbo].[Ticket]
GO
/****** Object:  StoredProcedure [dbo].[getHorariosDetalleId]    Script Date: 11/22/2014 11:37:51 ******/
IF  EXISTS (SELECT * FROM sys.objects WHERE object_id = OBJECT_ID(N'[dbo].[getHorariosDetalleId]') AND type in (N'P', N'PC'))
DROP PROCEDURE [dbo].[getHorariosDetalleId]
GO
/****** Object:  Table [dbo].[HorarioAtencionDetalle]    Script Date: 11/22/2014 11:37:51 ******/
IF  EXISTS (SELECT * FROM sys.objects WHERE object_id = OBJECT_ID(N'[dbo].[HorarioAtencionDetalle]') AND type in (N'U'))
DROP TABLE [dbo].[HorarioAtencionDetalle]
GO
/****** Object:  Table [dbo].[HorariosAtencion]    Script Date: 11/22/2014 11:37:51 ******/
IF  EXISTS (SELECT * FROM sys.objects WHERE object_id = OBJECT_ID(N'[dbo].[HorariosAtencion]') AND type in (N'U'))
DROP TABLE [dbo].[HorariosAtencion]
GO
/****** Object:  Default [DF_HorariosAtencion_idAgencia]    Script Date: 11/22/2014 11:37:51 ******/
IF  EXISTS (SELECT * FROM sys.default_constraints WHERE object_id = OBJECT_ID(N'[dbo].[DF_HorariosAtencion_idAgencia]') AND parent_object_id = OBJECT_ID(N'[dbo].[HorariosAtencion]'))
Begin
IF  EXISTS (SELECT * FROM dbo.sysobjects WHERE id = OBJECT_ID(N'[DF_HorariosAtencion_idAgencia]') AND type = 'D')
BEGIN
ALTER TABLE [dbo].[HorariosAtencion] DROP CONSTRAINT [DF_HorariosAtencion_idAgencia]
END


End
GO
/****** Object:  Table [dbo].[HorariosAtencion]    Script Date: 11/22/2014 11:37:51 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
IF NOT EXISTS (SELECT * FROM sys.objects WHERE object_id = OBJECT_ID(N'[dbo].[HorariosAtencion]') AND type in (N'U'))
BEGIN
CREATE TABLE [dbo].[HorariosAtencion](
	[idHorario] [int] IDENTITY(1,1) NOT NULL,
	[fechaModificacion] [datetime] NOT NULL,
	[idAgencia] [int] NOT NULL,
 CONSTRAINT [PK_HorariosAtencion] PRIMARY KEY CLUSTERED 
(
	[idHorario] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON)
)
END
GO
SET IDENTITY_INSERT [dbo].[HorariosAtencion] ON
INSERT [dbo].[HorariosAtencion] ([idHorario], [fechaModificacion], [idAgencia]) VALUES (1, CAST(0x00009E0B00000000 AS DateTime), 2)
SET IDENTITY_INSERT [dbo].[HorariosAtencion] OFF
/****** Object:  Table [dbo].[HorarioAtencionDetalle]    Script Date: 11/22/2014 11:37:51 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
IF NOT EXISTS (SELECT * FROM sys.objects WHERE object_id = OBJECT_ID(N'[dbo].[HorarioAtencionDetalle]') AND type in (N'U'))
BEGIN
CREATE TABLE [dbo].[HorarioAtencionDetalle](
	[idHorarioAtencionDetalle] [int] IDENTITY(1,1) NOT NULL,
	[idHorario] [int] NOT NULL,
	[diaSemana] [varchar](45) COLLATE Modern_Spanish_CI_AS NOT NULL,
	[horaInicio] [varchar](45) COLLATE Modern_Spanish_CI_AS NOT NULL,
	[horaFin] [varchar](45) COLLATE Modern_Spanish_CI_AS NOT NULL,
 CONSTRAINT [PK_HorarioAtencionDetalle] PRIMARY KEY CLUSTERED 
(
	[idHorarioAtencionDetalle] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON)
)
END
GO
SET IDENTITY_INSERT [dbo].[HorarioAtencionDetalle] ON
INSERT [dbo].[HorarioAtencionDetalle] ([idHorarioAtencionDetalle], [idHorario], [diaSemana], [horaInicio], [horaFin]) VALUES (1, 1, N'L-V', N'9:00', N'17:00')
INSERT [dbo].[HorarioAtencionDetalle] ([idHorarioAtencionDetalle], [idHorario], [diaSemana], [horaInicio], [horaFin]) VALUES (3, 1, N'S', N'9:00', N'13:00')
SET IDENTITY_INSERT [dbo].[HorarioAtencionDetalle] OFF
/****** Object:  StoredProcedure [dbo].[getHorariosDetalleId]    Script Date: 11/22/2014 11:37:51 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
IF NOT EXISTS (SELECT * FROM sys.objects WHERE object_id = OBJECT_ID(N'[dbo].[getHorariosDetalleId]') AND type in (N'P', N'PC'))
BEGIN
EXEC dbo.sp_executesql @statement = N'CREATE PROCEDURE [dbo].[getHorariosDetalleId]
	@idAgencia INT
AS
	BEGIN
		SELECT diaSemana,horaInicio,horaFin FROM HorarioAtencionDetalle INNER JOIN HorariosAtencion ON HorariosAtencion.idHorario = HorarioAtencionDetalle.idHorario WHERE HorariosAtencion.idAgencia=@idAgencia
	END
' 
END
GO
/****** Object:  Table [dbo].[Ticket]    Script Date: 11/22/2014 11:37:51 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
IF NOT EXISTS (SELECT * FROM sys.objects WHERE object_id = OBJECT_ID(N'[dbo].[Ticket]') AND type in (N'U'))
BEGIN
CREATE TABLE [dbo].[Ticket](
	[cTRAgencia] [char](5) COLLATE Modern_Spanish_CI_AS NOT NULL,
	[cTRTVentanilla] [char](5) COLLATE Modern_Spanish_CI_AS NOT NULL,
	[cTRTTicket] [char](5) COLLATE Modern_Spanish_CI_AS NOT NULL,
	[cTRTiempo] [char](12) COLLATE Modern_Spanish_CI_AS NOT NULL,
	[cTRTicket] [char](12) COLLATE Modern_Spanish_CI_AS NOT NULL,
	[dTRCodigo] [char](10) COLLATE Modern_Spanish_CI_AS NOT NULL,
	[cTRUsuario] [char](7) COLLATE Modern_Spanish_CI_AS NULL,
	[cTRVentanilla] [char](7) COLLATE Modern_Spanish_CI_AS NULL,
	[dTRUsuario] [char](100) COLLATE Modern_Spanish_CI_AS NULL,
	[fTRGenerado] [char](8) COLLATE Modern_Spanish_CI_AS NOT NULL,
	[bTREstado] [char](1) COLLATE Modern_Spanish_CI_AS NULL,
	[hTRGenerado] [char](9) COLLATE Modern_Spanish_CI_AS NULL,
	[hTRAsignado] [char](9) COLLATE Modern_Spanish_CI_AS NULL,
	[hTRIniAtencion] [char](9) COLLATE Modern_Spanish_CI_AS NULL,
	[hTRFinAtencion] [char](9) COLLATE Modern_Spanish_CI_AS NULL,
	[hTRIniAtencion2] [char](9) COLLATE Modern_Spanish_CI_AS NULL,
	[hTRFinAtencion2] [char](9) COLLATE Modern_Spanish_CI_AS NULL,
	[nTRNumTarjeta] [char](50) COLLATE Modern_Spanish_CI_AS NULL,
	[dTRNomCliente] [char](50) COLLATE Modern_Spanish_CI_AS NULL,
	[hTREsperaMinima] [char](9) COLLATE Modern_Spanish_CI_AS NULL,
	[bTRDerivado] [char](1) COLLATE Modern_Spanish_CI_AS NULL,
	[cTRDerivado] [char](12) COLLATE Modern_Spanish_CI_AS NULL,
	[nTRTiempoEspe] [int] NULL,
	[nTRTiempoAten] [int] NULL,
	[nTRTiempoServ] [int] NULL,
	[nTRInteHoraGene] [int] NULL,
	[nTRInteHoraAsig] [int] NULL,
	[nTRInteHoraInic] [int] NULL,
	[nTRInteHoraFin] [int] NULL,
	[bTRInterno] [char](1) COLLATE Modern_Spanish_CI_AS NULL,
	[cTRGrupo] [char](2) COLLATE Modern_Spanish_CI_AS NULL,
	[cTRCCliente] [char](50) COLLATE Modern_Spanish_CI_AS NULL,
	[cTRTicketera] [char](7) COLLATE Modern_Spanish_CI_AS NULL
)
END
GO
INSERT [dbo].[Ticket] ([cTRAgencia], [cTRTVentanilla], [cTRTTicket], [cTRTiempo], [cTRTicket], [dTRCodigo], [cTRUsuario], [cTRVentanilla], [dTRUsuario], [fTRGenerado], [bTREstado], [hTRGenerado], [hTRAsignado], [hTRIniAtencion], [hTRFinAtencion], [hTRIniAtencion2], [hTRFinAtencion2], [nTRNumTarjeta], [dTRNomCliente], [hTREsperaMinima], [bTRDerivado], [cTRDerivado], [nTRTiempoEspe], [nTRTiempoAten], [nTRTiempoServ], [nTRInteHoraGene], [nTRInteHoraAsig], [nTRInteHoraInic], [nTRInteHoraFin], [bTRInterno], [cTRGrupo], [cTRCCliente], [cTRTicketera]) VALUES (N'AG001', N'V0001', N'R0001', N'N00000001577', N'A00002667137', N'C916      ', N'U001307', N'W039602', N'Michael Jackson                                                                                     ', N'20130103', N'E', N'144927456', N'145349788', N'145358100', N'145625196', N'000000000', N'000000000', N'1122334455667788                                  ', N'Michael Jackson                                   ', N'         ', N'0', N'            ', 262, 147, 418, 14, 14, 14, 14, N'0', N'  ', N'I00000000000003                                   ', N'Q001178')
INSERT [dbo].[Ticket] ([cTRAgencia], [cTRTVentanilla], [cTRTTicket], [cTRTiempo], [cTRTicket], [dTRCodigo], [cTRUsuario], [cTRVentanilla], [dTRUsuario], [fTRGenerado], [bTREstado], [hTRGenerado], [hTRAsignado], [hTRIniAtencion], [hTRFinAtencion], [hTRIniAtencion2], [hTRFinAtencion2], [nTRNumTarjeta], [dTRNomCliente], [hTREsperaMinima], [bTRDerivado], [cTRDerivado], [nTRTiempoEspe], [nTRTiempoAten], [nTRTiempoServ], [nTRInteHoraGene], [nTRInteHoraAsig], [nTRInteHoraInic], [nTRInteHoraFin], [bTRInterno], [cTRGrupo], [cTRCCliente], [cTRTicketera]) VALUES (N'AG001', N'V0001', N'R0001', N'N00000001577', N'A00002667138', N'C917      ', N'U002171', N'W039593', N'Michael Jackson                                                                                     ', N'20130103', N'E', N'144931956', N'145425382', N'145434054', N'150341467', N'000000000', N'000000000', N'1122334455667788                                  ', N'Michael Jackson                                   ', N'         ', N'0', N'            ', 293, 547, 850, 14, 14, 14, 15, N'0', N'  ', N'I00000000000003                                   ', N'Q001178')
INSERT [dbo].[Ticket] ([cTRAgencia], [cTRTVentanilla], [cTRTTicket], [cTRTiempo], [cTRTicket], [dTRCodigo], [cTRUsuario], [cTRVentanilla], [dTRUsuario], [fTRGenerado], [bTREstado], [hTRGenerado], [hTRAsignado], [hTRIniAtencion], [hTRFinAtencion], [hTRIniAtencion2], [hTRFinAtencion2], [nTRNumTarjeta], [dTRNomCliente], [hTREsperaMinima], [bTRDerivado], [cTRDerivado], [nTRTiempoEspe], [nTRTiempoAten], [nTRTiempoServ], [nTRInteHoraGene], [nTRInteHoraAsig], [nTRInteHoraInic], [nTRInteHoraFin], [bTRInterno], [cTRGrupo], [cTRCCliente], [cTRTicketera]) VALUES (N'AG001', N'V0001', N'R0001', N'N00000001577', N'A00002667139', N'C918      ', N'U001861', N'W039607', N'Michael Jackson                                                                                     ', N'20130103', N'E', N'145000925', N'145457132', N'145541008', N'150100902', N'000000000', N'000000000', N'1122334455667788                                  ', N'Michael Jackson                                   ', N'         ', N'0', N'            ', 296, 320, 660, 14, 14, 14, 15, N'0', N'  ', N'I00000000000003                                   ', N'Q001178')
INSERT [dbo].[Ticket] ([cTRAgencia], [cTRTVentanilla], [cTRTTicket], [cTRTiempo], [cTRTicket], [dTRCodigo], [cTRUsuario], [cTRVentanilla], [dTRUsuario], [fTRGenerado], [bTREstado], [hTRGenerado], [hTRAsignado], [hTRIniAtencion], [hTRFinAtencion], [hTRIniAtencion2], [hTRFinAtencion2], [nTRNumTarjeta], [dTRNomCliente], [hTREsperaMinima], [bTRDerivado], [cTRDerivado], [nTRTiempoEspe], [nTRTiempoAten], [nTRTiempoServ], [nTRInteHoraGene], [nTRInteHoraAsig], [nTRInteHoraInic], [nTRInteHoraFin], [bTRInterno], [cTRGrupo], [cTRCCliente], [cTRTicketera]) VALUES (N'AG001', N'V0001', N'R0001', N'N00000001577', N'A00002667141', N'C919      ', N'U000379', N'W039586', N'Michael Jackson                                                                                     ', N'20130103', N'E', N'145032723', N'145512789', N'145514382', N'145654727', N'000000000', N'000000000', N'1122334455667788                                  ', N'Michael Jackson                                   ', N'         ', N'0', N'            ', 280, 100, 382, 14, 14, 14, 14, N'0', N'  ', N'I00000000000003                                   ', N'Q001178')
INSERT [dbo].[Ticket] ([cTRAgencia], [cTRTVentanilla], [cTRTTicket], [cTRTiempo], [cTRTicket], [dTRCodigo], [cTRUsuario], [cTRVentanilla], [dTRUsuario], [fTRGenerado], [bTREstado], [hTRGenerado], [hTRAsignado], [hTRIniAtencion], [hTRFinAtencion], [hTRIniAtencion2], [hTRFinAtencion2], [nTRNumTarjeta], [dTRNomCliente], [hTREsperaMinima], [bTRDerivado], [cTRDerivado], [nTRTiempoEspe], [nTRTiempoAten], [nTRTiempoServ], [nTRInteHoraGene], [nTRInteHoraAsig], [nTRInteHoraInic], [nTRInteHoraFin], [bTRInterno], [cTRGrupo], [cTRCCliente], [cTRTicketera]) VALUES (N'AG001', N'V0002', N'R0001', N'N00000001577', N'A00002667143', N'C920      ', N'U002266', N'W039600', N'Michael Jackson                                                                                     ', N'20130103', N'E', N'145129067', N'145516664', N'145523367', N'145726040', N'000000000', N'000000000', N'1122334455667788                                  ', N'Michael Jackson                                   ', N'         ', N'0', N'            ', 228, 123, 357, 14, 14, 14, 14, N'0', N'  ', N'I00000000000003                                   ', N'Q001178')
INSERT [dbo].[Ticket] ([cTRAgencia], [cTRTVentanilla], [cTRTTicket], [cTRTiempo], [cTRTicket], [dTRCodigo], [cTRUsuario], [cTRVentanilla], [dTRUsuario], [fTRGenerado], [bTREstado], [hTRGenerado], [hTRAsignado], [hTRIniAtencion], [hTRFinAtencion], [hTRIniAtencion2], [hTRFinAtencion2], [nTRNumTarjeta], [dTRNomCliente], [hTREsperaMinima], [bTRDerivado], [cTRDerivado], [nTRTiempoEspe], [nTRTiempoAten], [nTRTiempoServ], [nTRInteHoraGene], [nTRInteHoraAsig], [nTRInteHoraInic], [nTRInteHoraFin], [bTRInterno], [cTRGrupo], [cTRCCliente], [cTRTicketera]) VALUES (N'AG001', N'V0001', N'R0001', N'N00000001577', N'A00002667144', N'C921      ', N'U001858', N'W039601', N'Michael Jackson                                                                                     ', N'20130103', N'Y', N'145141364', N'145608055', N'145623258', N'151327818', N'000000000', N'000000000', N'1122334455667788                                  ', N'Michael Jackson                                   ', N'         ', N'0', N'            ', 267, 1025, 1306, 14, 14, 14, 15, N'0', N'  ', N'I00000000000001                                   ', N'Q001178')
INSERT [dbo].[Ticket] ([cTRAgencia], [cTRTVentanilla], [cTRTTicket], [cTRTiempo], [cTRTicket], [dTRCodigo], [cTRUsuario], [cTRVentanilla], [dTRUsuario], [fTRGenerado], [bTREstado], [hTRGenerado], [hTRAsignado], [hTRIniAtencion], [hTRFinAtencion], [hTRIniAtencion2], [hTRFinAtencion2], [nTRNumTarjeta], [dTRNomCliente], [hTREsperaMinima], [bTRDerivado], [cTRDerivado], [nTRTiempoEspe], [nTRTiempoAten], [nTRTiempoServ], [nTRInteHoraGene], [nTRInteHoraAsig], [nTRInteHoraInic], [nTRInteHoraFin], [bTRInterno], [cTRGrupo], [cTRCCliente], [cTRTicketera]) VALUES (N'AG001', N'V0001', N'R0001', N'N00000001577', N'A00002667146', N'C922      ', N'U002077', N'W039605', N'Michael Jackson                                                                                     ', N'20130103', N'Y', N'145151333', N'145611039', N'145649212', N'153951885', N'000000000', N'000000000', N'1122334455667788                                  ', N'Michael Jackson                                   ', N'         ', N'0', N'            ', 260, 2583, 2881, 14, 14, 14, 15, N'0', N'  ', N'I00000000000003                                   ', N'Q001178')
/****** Object:  Table [dbo].[Servidores]    Script Date: 11/22/2014 11:37:51 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
IF NOT EXISTS (SELECT * FROM sys.objects WHERE object_id = OBJECT_ID(N'[dbo].[Servidores]') AND type in (N'U'))
BEGIN
CREATE TABLE [dbo].[Servidores](
	[idServidor] [int] IDENTITY(1,1) NOT NULL,
	[cadenaConexion] [varchar](1000) COLLATE Modern_Spanish_CI_AS NOT NULL,
	[descripcion] [varchar](1000) COLLATE Modern_Spanish_CI_AS NOT NULL,
 CONSTRAINT [PK_Servidores] PRIMARY KEY CLUSTERED 
(
	[idServidor] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON)
)
END
GO
SET IDENTITY_INSERT [dbo].[Servidores] ON
INSERT [dbo].[Servidores] ([idServidor], [cadenaConexion], [descripcion]) VALUES (1, N'DEVORAK-PC\SQLEXPRESS', N'conexion servimatic 1')
SET IDENTITY_INSERT [dbo].[Servidores] OFF
/****** Object:  Table [dbo].[ParametrosGenerales]    Script Date: 11/22/2014 11:37:51 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
IF NOT EXISTS (SELECT * FROM sys.objects WHERE object_id = OBJECT_ID(N'[dbo].[ParametrosGenerales]') AND type in (N'U'))
BEGIN
CREATE TABLE [dbo].[ParametrosGenerales](
	[idParametro] [int] IDENTITY(1,1) NOT NULL,
	[Nombre] [varchar](45) COLLATE Modern_Spanish_CI_AS NOT NULL,
	[Valor] [varchar](45) COLLATE Modern_Spanish_CI_AS NOT NULL,
 CONSTRAINT [PK_ParametrosGenerales] PRIMARY KEY CLUSTERED 
(
	[idParametro] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON)
)
END
GO
/****** Object:  Table [dbo].[Monedas]    Script Date: 11/22/2014 11:37:51 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
IF NOT EXISTS (SELECT * FROM sys.objects WHERE object_id = OBJECT_ID(N'[dbo].[Monedas]') AND type in (N'U'))
BEGIN
CREATE TABLE [dbo].[Monedas](
	[idMoneda] [int] IDENTITY(1,1) NOT NULL,
	[Descripcion] [varchar](45) COLLATE Modern_Spanish_CI_AS NOT NULL,
 CONSTRAINT [PK_Monedas] PRIMARY KEY CLUSTERED 
(
	[idMoneda] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON)
)
END
GO
SET IDENTITY_INSERT [dbo].[Monedas] ON
INSERT [dbo].[Monedas] ([idMoneda], [Descripcion]) VALUES (1, N'BOL')
INSERT [dbo].[Monedas] ([idMoneda], [Descripcion]) VALUES (2, N'USD')
INSERT [dbo].[Monedas] ([idMoneda], [Descripcion]) VALUES (3, N'BOL/USD')
SET IDENTITY_INSERT [dbo].[Monedas] OFF
/****** Object:  Table [dbo].[MantenimientosProgramados]    Script Date: 11/22/2014 11:37:51 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
IF NOT EXISTS (SELECT * FROM sys.objects WHERE object_id = OBJECT_ID(N'[dbo].[MantenimientosProgramados]') AND type in (N'U'))
BEGIN
CREATE TABLE [dbo].[MantenimientosProgramados](
	[idMantenimiento] [int] IDENTITY(1,1) NOT NULL,
	[fecha] [date] NOT NULL,
	[descripcion] [varchar](100) COLLATE Modern_Spanish_CI_AS NOT NULL,
	[idCajero] [int] NOT NULL,
	[tiempoEstimado] [int] NOT NULL,
 CONSTRAINT [PK_MantenimientosProgramados] PRIMARY KEY CLUSTERED 
(
	[idMantenimiento] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON)
)
END
GO
/****** Object:  Table [dbo].[Locaciones]    Script Date: 11/22/2014 11:37:51 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
IF NOT EXISTS (SELECT * FROM sys.objects WHERE object_id = OBJECT_ID(N'[dbo].[Locaciones]') AND type in (N'U'))
BEGIN
CREATE TABLE [dbo].[Locaciones](
	[idLocacion] [int] IDENTITY(1,1) NOT NULL,
	[idCiudad] [int] NOT NULL,
	[latitud] [decimal](9, 6) NOT NULL,
	[longitud] [decimal](9, 6) NOT NULL,
 CONSTRAINT [PK_Locaciones] PRIMARY KEY CLUSTERED 
(
	[idLocacion] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON)
)
END
GO
SET IDENTITY_INSERT [dbo].[Locaciones] ON
INSERT [dbo].[Locaciones] ([idLocacion], [idCiudad], [latitud], [longitud]) VALUES (1, 1, CAST(-16.501085 AS Decimal(9, 6)), CAST(-68.137502 AS Decimal(9, 6)))
INSERT [dbo].[Locaciones] ([idLocacion], [idCiudad], [latitud], [longitud]) VALUES (2, 1, CAST(-16.501085 AS Decimal(9, 6)), CAST(-68.132943 AS Decimal(9, 6)))
INSERT [dbo].[Locaciones] ([idLocacion], [idCiudad], [latitud], [longitud]) VALUES (3, 1, CAST(-16.501124 AS Decimal(9, 6)), CAST(-68.132975 AS Decimal(9, 6)))
INSERT [dbo].[Locaciones] ([idLocacion], [idCiudad], [latitud], [longitud]) VALUES (4, 1, CAST(-16.498301 AS Decimal(9, 6)), CAST(-68.133651 AS Decimal(9, 6)))
INSERT [dbo].[Locaciones] ([idLocacion], [idCiudad], [latitud], [longitud]) VALUES (7, 1, CAST(-16.499412 AS Decimal(9, 6)), CAST(-68.124435 AS Decimal(9, 6)))
INSERT [dbo].[Locaciones] ([idLocacion], [idCiudad], [latitud], [longitud]) VALUES (9, 1, CAST(-16.496984 AS Decimal(9, 6)), CAST(-68.124333 AS Decimal(9, 6)))
INSERT [dbo].[Locaciones] ([idLocacion], [idCiudad], [latitud], [longitud]) VALUES (10, 1, CAST(-16.495591 AS Decimal(9, 6)), CAST(-68.133727 AS Decimal(9, 6)))
INSERT [dbo].[Locaciones] ([idLocacion], [idCiudad], [latitud], [longitud]) VALUES (11, 1, CAST(-16.492969 AS Decimal(9, 6)), CAST(-68.135224 AS Decimal(9, 6)))
INSERT [dbo].[Locaciones] ([idLocacion], [idCiudad], [latitud], [longitud]) VALUES (12, 1, CAST(-16.493893 AS Decimal(9, 6)), CAST(-68.140896 AS Decimal(9, 6)))
INSERT [dbo].[Locaciones] ([idLocacion], [idCiudad], [latitud], [longitud]) VALUES (13, 1, CAST(-16.490793 AS Decimal(9, 6)), CAST(-68.144050 AS Decimal(9, 6)))
SET IDENTITY_INSERT [dbo].[Locaciones] OFF
/****** Object:  Table [dbo].[Estados]    Script Date: 11/22/2014 11:37:51 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
IF NOT EXISTS (SELECT * FROM sys.objects WHERE object_id = OBJECT_ID(N'[dbo].[Estados]') AND type in (N'U'))
BEGIN
CREATE TABLE [dbo].[Estados](
	[idEstado] [int] IDENTITY(1,1) NOT NULL,
	[descripcion] [varchar](45) COLLATE Modern_Spanish_CI_AS NOT NULL,
 CONSTRAINT [PK_Estados] PRIMARY KEY CLUSTERED 
(
	[idEstado] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON)
)
END
GO
SET IDENTITY_INSERT [dbo].[Estados] ON
INSERT [dbo].[Estados] ([idEstado], [descripcion]) VALUES (1, N'Disponible')
INSERT [dbo].[Estados] ([idEstado], [descripcion]) VALUES (2, N'No Disponible')
SET IDENTITY_INSERT [dbo].[Estados] OFF
/****** Object:  Table [dbo].[Agencias]    Script Date: 11/22/2014 11:37:51 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
IF NOT EXISTS (SELECT * FROM sys.objects WHERE object_id = OBJECT_ID(N'[dbo].[Agencias]') AND type in (N'U'))
BEGIN
CREATE TABLE [dbo].[Agencias](
	[idAgencia] [int] IDENTITY(1,1) NOT NULL,
	[nombreAgencia] [varchar](10) COLLATE Modern_Spanish_CI_AS NOT NULL,
	[idEstado] [int] NOT NULL,
	[idLocacion] [int] NOT NULL,
	[idHorario] [int] NOT NULL,
	[idServidor] [int] NOT NULL,
	[fechaModificacion] [datetime] NOT NULL,
	[direccion] [varchar](100) COLLATE Modern_Spanish_CI_AS NULL,
 CONSTRAINT [PK_Agencias] PRIMARY KEY CLUSTERED 
(
	[idAgencia] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON)
)
END
GO
SET IDENTITY_INSERT [dbo].[Agencias] ON
INSERT [dbo].[Agencias] ([idAgencia], [nombreAgencia], [idEstado], [idLocacion], [idHorario], [idServidor], [fechaModificacion], [direccion]) VALUES (2, N'AGE-001', 1, 1, 1, 1, CAST(0x00009E0B00000000 AS DateTime), N'Agencia Central 1')
INSERT [dbo].[Agencias] ([idAgencia], [nombreAgencia], [idEstado], [idLocacion], [idHorario], [idServidor], [fechaModificacion], [direccion]) VALUES (3, N'AGE-002', 1, 2, 1, 1, CAST(0x00009E0B00000000 AS DateTime), N'Agencia 2')
INSERT [dbo].[Agencias] ([idAgencia], [nombreAgencia], [idEstado], [idLocacion], [idHorario], [idServidor], [fechaModificacion], [direccion]) VALUES (4, N'AGE-003', 1, 3, 1, 1, CAST(0x00009E0B00000000 AS DateTime), N'Agencia 3')
INSERT [dbo].[Agencias] ([idAgencia], [nombreAgencia], [idEstado], [idLocacion], [idHorario], [idServidor], [fechaModificacion], [direccion]) VALUES (5, N'AGE-004', 1, 4, 1, 1, CAST(0x00009E0B00000000 AS DateTime), N'Agencia 4')
INSERT [dbo].[Agencias] ([idAgencia], [nombreAgencia], [idEstado], [idLocacion], [idHorario], [idServidor], [fechaModificacion], [direccion]) VALUES (6, N'AGE-005', 1, 7, 1, 1, CAST(0x00009E0B00000000 AS DateTime), N'Agencia 5')
INSERT [dbo].[Agencias] ([idAgencia], [nombreAgencia], [idEstado], [idLocacion], [idHorario], [idServidor], [fechaModificacion], [direccion]) VALUES (8, N'AGE-006', 1, 9, 1, 1, CAST(0x00009E0B00000000 AS DateTime), N'Agencia 6')
INSERT [dbo].[Agencias] ([idAgencia], [nombreAgencia], [idEstado], [idLocacion], [idHorario], [idServidor], [fechaModificacion], [direccion]) VALUES (9, N'AGE-007', 1, 10, 1, 1, CAST(0x00009E0B00000000 AS DateTime), N'Agencia 7')
INSERT [dbo].[Agencias] ([idAgencia], [nombreAgencia], [idEstado], [idLocacion], [idHorario], [idServidor], [fechaModificacion], [direccion]) VALUES (10, N'AGE-008', 1, 11, 1, 1, CAST(0x00009E0B00000000 AS DateTime), N'Agencia 8')
INSERT [dbo].[Agencias] ([idAgencia], [nombreAgencia], [idEstado], [idLocacion], [idHorario], [idServidor], [fechaModificacion], [direccion]) VALUES (11, N'AGE-009', 1, 12, 1, 1, CAST(0x00009E0B00000000 AS DateTime), N'Agencia 9')
SET IDENTITY_INSERT [dbo].[Agencias] OFF
/****** Object:  StoredProcedure [dbo].[getAgenciasCriterios]    Script Date: 11/22/2014 11:37:51 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
IF NOT EXISTS (SELECT * FROM sys.objects WHERE object_id = OBJECT_ID(N'[dbo].[getAgenciasCriterios]') AND type in (N'P', N'PC'))
BEGIN
EXEC dbo.sp_executesql @statement = N'CREATE PROCEDURE [dbo].[getAgenciasCriterios]
	@estado int,
	@ciudad int
AS
	BEGIN
		SELECT Agencias.idAgencia, Locaciones.latitud, Locaciones.longitud,Servidores.cadenaConexion FROM Agencias INNER JOIN Locaciones ON Locaciones.idLocacion = Agencias.idLocacion INNER JOIN Servidores ON Servidores.idServidor=Agencias.idServidor WHERE (Agencias.idEstado = @estado) AND (Locaciones.idCiudad = @ciudad)
	END
' 
END
GO
/****** Object:  Table [dbo].[Ciudades]    Script Date: 11/22/2014 11:37:51 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
IF NOT EXISTS (SELECT * FROM sys.objects WHERE object_id = OBJECT_ID(N'[dbo].[Ciudades]') AND type in (N'U'))
BEGIN
CREATE TABLE [dbo].[Ciudades](
	[idCiudad] [int] IDENTITY(1,1) NOT NULL,
	[nombre] [varchar](50) COLLATE Modern_Spanish_CI_AS NOT NULL,
	[pais] [varchar](45) COLLATE Modern_Spanish_CI_AS NOT NULL,
 CONSTRAINT [PK_Ciudades] PRIMARY KEY CLUSTERED 
(
	[idCiudad] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON)
)
END
GO
SET IDENTITY_INSERT [dbo].[Ciudades] ON
INSERT [dbo].[Ciudades] ([idCiudad], [nombre], [pais]) VALUES (1, N'La Paz', N'Bolivia')
INSERT [dbo].[Ciudades] ([idCiudad], [nombre], [pais]) VALUES (2, N'Cochabamba', N'Bolivia')
INSERT [dbo].[Ciudades] ([idCiudad], [nombre], [pais]) VALUES (3, N'Santa Cruz', N'Bolivia')
SET IDENTITY_INSERT [dbo].[Ciudades] OFF
/****** Object:  StoredProcedure [dbo].[getAgenciaId]    Script Date: 11/22/2014 11:37:51 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
IF NOT EXISTS (SELECT * FROM sys.objects WHERE object_id = OBJECT_ID(N'[dbo].[getAgenciaId]') AND type in (N'P', N'PC'))
BEGIN
EXEC dbo.sp_executesql @statement = N'CREATE PROCEDURE [dbo].[getAgenciaId]
	@idAgencia INT
AS
	BEGIN
		SELECT Agencias.idAgencia as Ag_idAgencia, Agencias.direccion as Ag_direccion,Agencias.nombreAgencia as Ag_nombreAgencia, Agencias.idEstado as Ag_idEstado, Agencias.idLocacion as Ag_idLocacion, Agencias.fechaModificacion as Ag_fechaModificacion, Locaciones.idCiudad as Lo_idCiudad, Locaciones.latitud as Lo_latitud, Locaciones.longitud as Lo_longitud, Ciudades.nombre as Ci_nombre, Ciudades.pais as Ci_pais,Servidores.cadenaConexion FROM Agencias INNER JOIN Locaciones ON Agencias.idLocacion = Locaciones.idLocacion INNER JOIN Ciudades ON Locaciones.idCiudad = Ciudades.idCiudad INNER JOIN Servidores ON Servidores.idServidor=Agencias.idServidor WHERE idAgencia=@idAgencia
	END
' 
END
GO
/****** Object:  Table [dbo].[Agentes]    Script Date: 11/22/2014 11:37:51 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
IF NOT EXISTS (SELECT * FROM sys.objects WHERE object_id = OBJECT_ID(N'[dbo].[Agentes]') AND type in (N'U'))
BEGIN
CREATE TABLE [dbo].[Agentes](
	[idAgente] [int] IDENTITY(1,1) NOT NULL,
	[codigoAgente] [varchar](15) COLLATE Modern_Spanish_CI_AS NOT NULL,
	[idEstado] [int] NOT NULL,
	[idLocacion] [int] NOT NULL,
	[fechaApertura] [datetime] NOT NULL,
	[fechaModificacion] [datetime] NOT NULL,
	[domicilio] [varchar](100) COLLATE Modern_Spanish_CI_AS NOT NULL,
	[propietario] [varchar](100) COLLATE Modern_Spanish_CI_AS NOT NULL,
	[idMoneda] [int] NOT NULL,
 CONSTRAINT [PK_Agentes] PRIMARY KEY CLUSTERED 
(
	[idAgente] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON)
)
END
GO
SET IDENTITY_INSERT [dbo].[Agentes] ON
INSERT [dbo].[Agentes] ([idAgente], [codigoAgente], [idEstado], [idLocacion], [fechaApertura], [fechaModificacion], [domicilio], [propietario], [idMoneda]) VALUES (1, N'AG-001', 1, 1, CAST(0x00009CFA00000000 AS DateTime), CAST(0x00009CFA00000000 AS DateTime), N'Tunel Instituto Americano2', N'Don Juan Tenorio', 1)
INSERT [dbo].[Agentes] ([idAgente], [codigoAgente], [idEstado], [idLocacion], [fechaApertura], [fechaModificacion], [domicilio], [propietario], [idMoneda]) VALUES (2, N'AG-002', 1, 2, CAST(0x00009CFB00000000 AS DateTime), CAST(0x00009CFB00000000 AS DateTime), N'Coliseo Cerrado, caniada strongest', N'Nicolas Quino', 1)
INSERT [dbo].[Agentes] ([idAgente], [codigoAgente], [idEstado], [idLocacion], [fechaApertura], [fechaModificacion], [domicilio], [propietario], [idMoneda]) VALUES (3, N'AG-003', 1, 3, CAST(0x00009CFC00000000 AS DateTime), CAST(0x00009CFC00000000 AS DateTime), N'Av.16 julio el prado', N'Remberto Aquise', 1)
INSERT [dbo].[Agentes] ([idAgente], [codigoAgente], [idEstado], [idLocacion], [fechaApertura], [fechaModificacion], [domicilio], [propietario], [idMoneda]) VALUES (4, N'AG-004', 1, 4, CAST(0x00009CFD00000000 AS DateTime), CAST(0x00009CFD00000000 AS DateTime), N'BCP agencia central', N'BCP', 1)
INSERT [dbo].[Agentes] ([idAgente], [codigoAgente], [idEstado], [idLocacion], [fechaApertura], [fechaModificacion], [domicilio], [propietario], [idMoneda]) VALUES (5, N'AG-005', 1, 7, CAST(0x00009CFE00000000 AS DateTime), CAST(0x00009CFE00000000 AS DateTime), N'Stadium Miraflores', N'Julia Mendieta', 1)
INSERT [dbo].[Agentes] ([idAgente], [codigoAgente], [idEstado], [idLocacion], [fechaApertura], [fechaModificacion], [domicilio], [propietario], [idMoneda]) VALUES (6, N'AG-006', 1, 9, CAST(0x00009CFF00000000 AS DateTime), CAST(0x00009CFF00000000 AS DateTime), N'Plaza Uyuni Reloj', N'Claudia Rico', 1)
INSERT [dbo].[Agentes] ([idAgente], [codigoAgente], [idEstado], [idLocacion], [fechaApertura], [fechaModificacion], [domicilio], [propietario], [idMoneda]) VALUES (7, N'AG-007', 1, 10, CAST(0x00009CFF00000000 AS DateTime), CAST(0x00009CFF00000000 AS DateTime), N'Plaza Murillo', N'Luis Jurado', 1)
INSERT [dbo].[Agentes] ([idAgente], [codigoAgente], [idEstado], [idLocacion], [fechaApertura], [fechaModificacion], [domicilio], [propietario], [idMoneda]) VALUES (8, N'AG-008', 1, 11, CAST(0x00009CFF00000000 AS DateTime), CAST(0x00009CFF00000000 AS DateTime), N'Col. San Calixto', N'Sonia Velarde', 1)
INSERT [dbo].[Agentes] ([idAgente], [codigoAgente], [idEstado], [idLocacion], [fechaApertura], [fechaModificacion], [domicilio], [propietario], [idMoneda]) VALUES (9, N'AG-009', 1, 12, CAST(0x00009CFF00000000 AS DateTime), CAST(0x00009CFF00000000 AS DateTime), N'Plaza Eguino', N'Remberta Cahuaya', 1)
INSERT [dbo].[Agentes] ([idAgente], [codigoAgente], [idEstado], [idLocacion], [fechaApertura], [fechaModificacion], [domicilio], [propietario], [idMoneda]) VALUES (10, N'AG-010', 1, 13, CAST(0x00009CFF00000000 AS DateTime), CAST(0x00009CFF00000000 AS DateTime), N'Estacion Central Av.Peru', N'Sergio Martinez', 1)
INSERT [dbo].[Agentes] ([idAgente], [codigoAgente], [idEstado], [idLocacion], [fechaApertura], [fechaModificacion], [domicilio], [propietario], [idMoneda]) VALUES (12, N'12', 1, 1, CAST(0x0000A12400000000 AS DateTime), CAST(0x0000A12400000000 AS DateTime), N'domicilio 2', N'NuevoPropietario', 3)
SET IDENTITY_INSERT [dbo].[Agentes] OFF
/****** Object:  StoredProcedure [dbo].[getAgentesCriterios]    Script Date: 11/22/2014 11:37:51 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
IF NOT EXISTS (SELECT * FROM sys.objects WHERE object_id = OBJECT_ID(N'[dbo].[getAgentesCriterios]') AND type in (N'P', N'PC'))
BEGIN
EXEC dbo.sp_executesql @statement = N'CREATE PROCEDURE [dbo].[getAgentesCriterios]
	@moneda int,
	@estado int,
	@ciudad int
AS
	BEGIN
	SELECT Agentes.idAgente, Locaciones.latitud, Locaciones.longitud FROM Agentes INNER JOIN Locaciones ON Locaciones.idLocacion = Agentes.idLocacion WHERE (Agentes.idMoneda = @moneda) AND (Agentes.idEstado = @estado) AND (Locaciones.idCiudad = @ciudad)
	END
' 
END
GO
/****** Object:  StoredProcedure [dbo].[getAgenteId]    Script Date: 11/22/2014 11:37:51 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
IF NOT EXISTS (SELECT * FROM sys.objects WHERE object_id = OBJECT_ID(N'[dbo].[getAgenteId]') AND type in (N'P', N'PC'))
BEGIN
EXEC dbo.sp_executesql @statement = N'CREATE PROCEDURE [dbo].[getAgenteId]
	@idAgente int	
AS
	BEGIN 
	SELECT Agentes.idAgente as Ag_idAgente, Agentes.codigoAgente as Ag_codigoAgente, Agentes.idEstado as Ag_idEstado, Agentes.idLocacion as Ag_idLocacion, Agentes.fechaApertura as Ag_fechaApertura, Agentes.fechaModificacion as Ag_fechaModificacion, Agentes.domicilio as Ag_domicilio,Agentes.propietario as Ag_propietario, Agentes.idMoneda as Ag_idMoneda, Locaciones.idCiudad as Lo_idCiudad, Locaciones.latitud as Lo_latitud, Locaciones.longitud as Lo_longitud, Monedas.Descripcion as Mo_Descripcion, Ciudades.nombre as Ci_nombre, Ciudades.pais as Ci_pais FROM Agentes INNER JOIN Locaciones ON Agentes.idLocacion = Locaciones.idLocacion INNER JOIN Monedas ON Agentes.idMoneda = Monedas.idMoneda INNER JOIN Ciudades ON Locaciones.idCiudad = Ciudades.idCiudad WHERE idAgente=@idAgente
	END
' 
END
GO
/****** Object:  Table [dbo].[Cajeros]    Script Date: 11/22/2014 11:37:51 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
IF NOT EXISTS (SELECT * FROM sys.objects WHERE object_id = OBJECT_ID(N'[dbo].[Cajeros]') AND type in (N'U'))
BEGIN
CREATE TABLE [dbo].[Cajeros](
	[idCajero] [int] IDENTITY(1,1) NOT NULL,
	[codigoCajero] [varchar](15) COLLATE Modern_Spanish_CI_AS NOT NULL,
	[idEstado] [int] NOT NULL,
	[idLocacion] [int] NOT NULL,
	[idMoneda] [int] NOT NULL,
	[habilitadoDiscapacitados] [int] NOT NULL,
	[idServidor] [int] NOT NULL,
	[fechaModificacion] [datetime] NOT NULL,
	[direccion] [varchar](150) COLLATE Modern_Spanish_CI_AS NOT NULL,
 CONSTRAINT [PK_Cajeros] PRIMARY KEY CLUSTERED 
(
	[idCajero] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON)
)
END
GO
SET IDENTITY_INSERT [dbo].[Cajeros] ON
INSERT [dbo].[Cajeros] ([idCajero], [codigoCajero], [idEstado], [idLocacion], [idMoneda], [habilitadoDiscapacitados], [idServidor], [fechaModificacion], [direccion]) VALUES (1, N'CAJ_001', 1, 1, 1, 1, 1, CAST(0x0000A3E000000000 AS DateTime), N'Luis Carvajal #332')
INSERT [dbo].[Cajeros] ([idCajero], [codigoCajero], [idEstado], [idLocacion], [idMoneda], [habilitadoDiscapacitados], [idServidor], [fechaModificacion], [direccion]) VALUES (2, N'CAJ_002', 1, 2, 2, 1, 1, CAST(0x0000A3E000000000 AS DateTime), N'Armando Cardozo #888')
INSERT [dbo].[Cajeros] ([idCajero], [codigoCajero], [idEstado], [idLocacion], [idMoneda], [habilitadoDiscapacitados], [idServidor], [fechaModificacion], [direccion]) VALUES (3, N'CAJ_003', 1, 3, 3, 1, 1, CAST(0x0000A3E000000000 AS DateTime), N'Central #223')
INSERT [dbo].[Cajeros] ([idCajero], [codigoCajero], [idEstado], [idLocacion], [idMoneda], [habilitadoDiscapacitados], [idServidor], [fechaModificacion], [direccion]) VALUES (4, N'CAJ_004', 1, 4, 3, 1, 1, CAST(0x0000A3E000000000 AS DateTime), N'Agencia #444')
SET IDENTITY_INSERT [dbo].[Cajeros] OFF
/****** Object:  StoredProcedure [dbo].[getPersonasEnColaAgencia]    Script Date: 11/22/2014 11:37:51 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
IF NOT EXISTS (SELECT * FROM sys.objects WHERE object_id = OBJECT_ID(N'[dbo].[getPersonasEnColaAgencia]') AND type in (N'P', N'PC'))
BEGIN
EXEC dbo.sp_executesql @statement = N'CREATE PROCEDURE [dbo].[getPersonasEnColaAgencia]
(
    @filasVentanilla int OUTPUT,
	@filasPlataforma int OUTPUT
    
)
AS 
	SELECT @filasVentanilla=COUNT(*) FROM dbo.Ticket WHERE [cTRTVentanilla]=''V0001'' AND bTREstado=''E'';
	SELECT @filasPlataforma=COUNT(*) FROM dbo.Ticket WHERE [cTRTVentanilla]=''V0002'' AND bTREstado=''E'';



' 
END
GO
/****** Object:  StoredProcedure [dbo].[getCajerosCriterio]    Script Date: 11/22/2014 11:37:51 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
IF NOT EXISTS (SELECT * FROM sys.objects WHERE object_id = OBJECT_ID(N'[dbo].[getCajerosCriterio]') AND type in (N'P', N'PC'))
BEGIN
EXEC dbo.sp_executesql @statement = N'CREATE PROCEDURE [dbo].[getCajerosCriterio]
	@moneda int,
	@estado int,
	@ciudad int,
	@discapacitados int
AS
	BEGIN
		SELECT Cajeros.idCajero, Locaciones.latitud, Locaciones.longitud,Servidores.cadenaConexion,Cajeros.idMoneda as Ca_idMoneda,Monedas.Descripcion as Mo_Descripcion,Cajeros.habilitadoDiscapacitados as Ca_minusvalidos FROM Cajeros INNER JOIN Locaciones ON Locaciones.idLocacion = Cajeros.idLocacion INNER JOIN Servidores ON Servidores.idServidor=Cajeros.idServidor INNER JOIN Monedas ON Monedas.idMoneda=Cajeros.idMoneda  WHERE (Cajeros.idEstado = @estado) AND (Locaciones.idCiudad = @ciudad) AND (Cajeros.idMoneda = @moneda) AND (Cajeros.habilitadoDiscapacitados=@discapacitados)
	END
' 
END
GO
/****** Object:  StoredProcedure [dbo].[getCajeroId]    Script Date: 11/22/2014 11:37:51 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
IF NOT EXISTS (SELECT * FROM sys.objects WHERE object_id = OBJECT_ID(N'[dbo].[getCajeroId]') AND type in (N'P', N'PC'))
BEGIN
EXEC dbo.sp_executesql @statement = N'CREATE PROCEDURE [dbo].[getCajeroId]
	@idCajero INT
AS
	BEGIN
		SELECT Cajeros.idCajero as Ca_idCajero, Cajeros.direccion as Ca_direccion,Cajeros.codigoCajero as Ca_codigoCajero, Cajeros.idLocacion as Ca_idLocacion, Cajeros.fechaModificacion as Ca_fechaModificacion,Cajeros.habilitadoDiscapacitados as Ca_minusvalidos, Locaciones.idCiudad as Lo_idCiudad, Locaciones.latitud as Lo_latitud, Locaciones.longitud as Lo_longitud, Ciudades.nombre as Ci_nombre, Ciudades.pais as Ci_pais,Servidores.cadenaConexion,Cajeros.idMoneda as Ca_idMoneda,Monedas.Descripcion as Mo_Descripcion FROM Cajeros INNER JOIN Locaciones ON Cajeros.idLocacion = Locaciones.idLocacion INNER JOIN Ciudades ON Locaciones.idCiudad = Ciudades.idCiudad INNER JOIN Servidores ON Servidores.idServidor=Cajeros.idServidor INNER JOIN Monedas ON Monedas.idMoneda=Cajeros.idMoneda WHERE idCajero=@idCajero
	END
' 
END
GO
/****** Object:  Default [DF_HorariosAtencion_idAgencia]    Script Date: 11/22/2014 11:37:51 ******/
IF Not EXISTS (SELECT * FROM sys.default_constraints WHERE object_id = OBJECT_ID(N'[dbo].[DF_HorariosAtencion_idAgencia]') AND parent_object_id = OBJECT_ID(N'[dbo].[HorariosAtencion]'))
Begin
IF NOT EXISTS (SELECT * FROM dbo.sysobjects WHERE id = OBJECT_ID(N'[DF_HorariosAtencion_idAgencia]') AND type = 'D')
BEGIN
ALTER TABLE [dbo].[HorariosAtencion] ADD  CONSTRAINT [DF_HorariosAtencion_idAgencia]  DEFAULT ((1)) FOR [idAgencia]
END


End
GO
/****** Object:  ForeignKey [FK_Agencias_Estados]    Script Date: 11/22/2014 11:37:51 ******/
IF NOT EXISTS (SELECT * FROM sys.foreign_keys WHERE object_id = OBJECT_ID(N'[dbo].[FK_Agencias_Estados]') AND parent_object_id = OBJECT_ID(N'[dbo].[Agencias]'))
ALTER TABLE [dbo].[Agencias]  WITH CHECK ADD  CONSTRAINT [FK_Agencias_Estados] FOREIGN KEY([idEstado])
REFERENCES [dbo].[Estados] ([idEstado])
GO
IF  EXISTS (SELECT * FROM sys.foreign_keys WHERE object_id = OBJECT_ID(N'[dbo].[FK_Agencias_Estados]') AND parent_object_id = OBJECT_ID(N'[dbo].[Agencias]'))
ALTER TABLE [dbo].[Agencias] CHECK CONSTRAINT [FK_Agencias_Estados]
GO
/****** Object:  ForeignKey [FK_Agencias_HorariosAtencion]    Script Date: 11/22/2014 11:37:51 ******/
IF NOT EXISTS (SELECT * FROM sys.foreign_keys WHERE object_id = OBJECT_ID(N'[dbo].[FK_Agencias_HorariosAtencion]') AND parent_object_id = OBJECT_ID(N'[dbo].[Agencias]'))
ALTER TABLE [dbo].[Agencias]  WITH CHECK ADD  CONSTRAINT [FK_Agencias_HorariosAtencion] FOREIGN KEY([idHorario])
REFERENCES [dbo].[HorariosAtencion] ([idHorario])
GO
IF  EXISTS (SELECT * FROM sys.foreign_keys WHERE object_id = OBJECT_ID(N'[dbo].[FK_Agencias_HorariosAtencion]') AND parent_object_id = OBJECT_ID(N'[dbo].[Agencias]'))
ALTER TABLE [dbo].[Agencias] CHECK CONSTRAINT [FK_Agencias_HorariosAtencion]
GO
/****** Object:  ForeignKey [FK_Agencias_Locaciones]    Script Date: 11/22/2014 11:37:51 ******/
IF NOT EXISTS (SELECT * FROM sys.foreign_keys WHERE object_id = OBJECT_ID(N'[dbo].[FK_Agencias_Locaciones]') AND parent_object_id = OBJECT_ID(N'[dbo].[Agencias]'))
ALTER TABLE [dbo].[Agencias]  WITH CHECK ADD  CONSTRAINT [FK_Agencias_Locaciones] FOREIGN KEY([idLocacion])
REFERENCES [dbo].[Locaciones] ([idLocacion])
GO
IF  EXISTS (SELECT * FROM sys.foreign_keys WHERE object_id = OBJECT_ID(N'[dbo].[FK_Agencias_Locaciones]') AND parent_object_id = OBJECT_ID(N'[dbo].[Agencias]'))
ALTER TABLE [dbo].[Agencias] CHECK CONSTRAINT [FK_Agencias_Locaciones]
GO
/****** Object:  ForeignKey [FK_Agencias_Servidores]    Script Date: 11/22/2014 11:37:51 ******/
IF NOT EXISTS (SELECT * FROM sys.foreign_keys WHERE object_id = OBJECT_ID(N'[dbo].[FK_Agencias_Servidores]') AND parent_object_id = OBJECT_ID(N'[dbo].[Agencias]'))
ALTER TABLE [dbo].[Agencias]  WITH CHECK ADD  CONSTRAINT [FK_Agencias_Servidores] FOREIGN KEY([idServidor])
REFERENCES [dbo].[Servidores] ([idServidor])
GO
IF  EXISTS (SELECT * FROM sys.foreign_keys WHERE object_id = OBJECT_ID(N'[dbo].[FK_Agencias_Servidores]') AND parent_object_id = OBJECT_ID(N'[dbo].[Agencias]'))
ALTER TABLE [dbo].[Agencias] CHECK CONSTRAINT [FK_Agencias_Servidores]
GO
/****** Object:  ForeignKey [FK_Cajeros_Estados]    Script Date: 11/22/2014 11:37:51 ******/
IF NOT EXISTS (SELECT * FROM sys.foreign_keys WHERE object_id = OBJECT_ID(N'[dbo].[FK_Cajeros_Estados]') AND parent_object_id = OBJECT_ID(N'[dbo].[Cajeros]'))
ALTER TABLE [dbo].[Cajeros]  WITH CHECK ADD  CONSTRAINT [FK_Cajeros_Estados] FOREIGN KEY([idEstado])
REFERENCES [dbo].[Estados] ([idEstado])
GO
IF  EXISTS (SELECT * FROM sys.foreign_keys WHERE object_id = OBJECT_ID(N'[dbo].[FK_Cajeros_Estados]') AND parent_object_id = OBJECT_ID(N'[dbo].[Cajeros]'))
ALTER TABLE [dbo].[Cajeros] CHECK CONSTRAINT [FK_Cajeros_Estados]
GO
/****** Object:  ForeignKey [FK_Cajeros_Locaciones]    Script Date: 11/22/2014 11:37:51 ******/
IF NOT EXISTS (SELECT * FROM sys.foreign_keys WHERE object_id = OBJECT_ID(N'[dbo].[FK_Cajeros_Locaciones]') AND parent_object_id = OBJECT_ID(N'[dbo].[Cajeros]'))
ALTER TABLE [dbo].[Cajeros]  WITH CHECK ADD  CONSTRAINT [FK_Cajeros_Locaciones] FOREIGN KEY([idLocacion])
REFERENCES [dbo].[Locaciones] ([idLocacion])
GO
IF  EXISTS (SELECT * FROM sys.foreign_keys WHERE object_id = OBJECT_ID(N'[dbo].[FK_Cajeros_Locaciones]') AND parent_object_id = OBJECT_ID(N'[dbo].[Cajeros]'))
ALTER TABLE [dbo].[Cajeros] CHECK CONSTRAINT [FK_Cajeros_Locaciones]
GO
/****** Object:  ForeignKey [FK_Cajeros_Monedas]    Script Date: 11/22/2014 11:37:51 ******/
IF NOT EXISTS (SELECT * FROM sys.foreign_keys WHERE object_id = OBJECT_ID(N'[dbo].[FK_Cajeros_Monedas]') AND parent_object_id = OBJECT_ID(N'[dbo].[Cajeros]'))
ALTER TABLE [dbo].[Cajeros]  WITH CHECK ADD  CONSTRAINT [FK_Cajeros_Monedas] FOREIGN KEY([idMoneda])
REFERENCES [dbo].[Monedas] ([idMoneda])
GO
IF  EXISTS (SELECT * FROM sys.foreign_keys WHERE object_id = OBJECT_ID(N'[dbo].[FK_Cajeros_Monedas]') AND parent_object_id = OBJECT_ID(N'[dbo].[Cajeros]'))
ALTER TABLE [dbo].[Cajeros] CHECK CONSTRAINT [FK_Cajeros_Monedas]
GO
/****** Object:  ForeignKey [FK_Cajeros_Servidores]    Script Date: 11/22/2014 11:37:51 ******/
IF NOT EXISTS (SELECT * FROM sys.foreign_keys WHERE object_id = OBJECT_ID(N'[dbo].[FK_Cajeros_Servidores]') AND parent_object_id = OBJECT_ID(N'[dbo].[Cajeros]'))
ALTER TABLE [dbo].[Cajeros]  WITH CHECK ADD  CONSTRAINT [FK_Cajeros_Servidores] FOREIGN KEY([idServidor])
REFERENCES [dbo].[Servidores] ([idServidor])
GO
IF  EXISTS (SELECT * FROM sys.foreign_keys WHERE object_id = OBJECT_ID(N'[dbo].[FK_Cajeros_Servidores]') AND parent_object_id = OBJECT_ID(N'[dbo].[Cajeros]'))
ALTER TABLE [dbo].[Cajeros] CHECK CONSTRAINT [FK_Cajeros_Servidores]
GO
/****** Object:  ForeignKey [FK_HorarioAtencionDetalle_HorariosAtencion]    Script Date: 11/22/2014 11:37:51 ******/
IF NOT EXISTS (SELECT * FROM sys.foreign_keys WHERE object_id = OBJECT_ID(N'[dbo].[FK_HorarioAtencionDetalle_HorariosAtencion]') AND parent_object_id = OBJECT_ID(N'[dbo].[HorarioAtencionDetalle]'))
ALTER TABLE [dbo].[HorarioAtencionDetalle]  WITH CHECK ADD  CONSTRAINT [FK_HorarioAtencionDetalle_HorariosAtencion] FOREIGN KEY([idHorario])
REFERENCES [dbo].[HorariosAtencion] ([idHorario])
GO
IF  EXISTS (SELECT * FROM sys.foreign_keys WHERE object_id = OBJECT_ID(N'[dbo].[FK_HorarioAtencionDetalle_HorariosAtencion]') AND parent_object_id = OBJECT_ID(N'[dbo].[HorarioAtencionDetalle]'))
ALTER TABLE [dbo].[HorarioAtencionDetalle] CHECK CONSTRAINT [FK_HorarioAtencionDetalle_HorariosAtencion]
GO
/****** Object:  ForeignKey [FK_HorariosAtencion_Agencias]    Script Date: 11/22/2014 11:37:51 ******/
IF NOT EXISTS (SELECT * FROM sys.foreign_keys WHERE object_id = OBJECT_ID(N'[dbo].[FK_HorariosAtencion_Agencias]') AND parent_object_id = OBJECT_ID(N'[dbo].[HorariosAtencion]'))
ALTER TABLE [dbo].[HorariosAtencion]  WITH CHECK ADD  CONSTRAINT [FK_HorariosAtencion_Agencias] FOREIGN KEY([idAgencia])
REFERENCES [dbo].[Agencias] ([idAgencia])
GO
IF  EXISTS (SELECT * FROM sys.foreign_keys WHERE object_id = OBJECT_ID(N'[dbo].[FK_HorariosAtencion_Agencias]') AND parent_object_id = OBJECT_ID(N'[dbo].[HorariosAtencion]'))
ALTER TABLE [dbo].[HorariosAtencion] CHECK CONSTRAINT [FK_HorariosAtencion_Agencias]
GO
