--
-- PostgreSQL database dump
--

-- Dumped from database version 11.1
-- Dumped by pg_dump version 11.1

-- Started on 2019-06-07 15:04:57

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- TOC entry 201 (class 1259 OID 16572)
-- Name: acceuil; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.acceuil (
    id_accueil integer NOT NULL,
    "titre_acceuil " character varying(255) NOT NULL
);


ALTER TABLE public.acceuil OWNER TO postgres;

--
-- TOC entry 197 (class 1259 OID 16546)
-- Name: compétence; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public."compétence" (
    id_comp integer NOT NULL,
    texte_comp character varying(255) NOT NULL
);


ALTER TABLE public."compétence" OWNER TO postgres;

--
-- TOC entry 202 (class 1259 OID 16577)
-- Name: contact; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.contact (
    id_contact integer NOT NULL,
    "adresse_contact " character varying(255) NOT NULL,
    "tel_contact " integer NOT NULL,
    "email_contact " character varying(255) NOT NULL
);


ALTER TABLE public.contact OWNER TO postgres;

--
-- TOC entry 199 (class 1259 OID 16556)
-- Name: formations; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.formations (
    id_form integer NOT NULL,
    "date_début_form" date NOT NULL,
    date_fin_form date NOT NULL,
    diplome_form character varying(255) NOT NULL,
    etablissement_form character varying(255) NOT NULL
);


ALTER TABLE public.formations OWNER TO postgres;

--
-- TOC entry 203 (class 1259 OID 16585)
-- Name: formulaire; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.formulaire (
    id_formulaire integer NOT NULL,
    "nom_formulaire " character varying(255) NOT NULL,
    "prénom_formulaire " character varying(255) NOT NULL,
    "tel_formulaire " integer NOT NULL,
    "email_formulaire " character varying(255) NOT NULL,
    "message_formulaire " character varying(255) NOT NULL
);


ALTER TABLE public.formulaire OWNER TO postgres;

--
-- TOC entry 204 (class 1259 OID 16648)
-- Name: formulaire1; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.formulaire1 (
    id_formulaire integer NOT NULL,
    nom_formulaire character varying(255) NOT NULL,
    "prénom_formulaire" character varying(255) NOT NULL,
    email_formulaire character varying(255) NOT NULL,
    message_formulaire character varying(255) NOT NULL
);


ALTER TABLE public.formulaire1 OWNER TO postgres;

--
-- TOC entry 196 (class 1259 OID 16538)
-- Name: header; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.header (
    id_header integer NOT NULL,
    rubrique_header character varying(255) NOT NULL,
    photo_header character varying(255) NOT NULL,
    formulaire character varying(255) NOT NULL
);


ALTER TABLE public.header OWNER TO postgres;

--
-- TOC entry 200 (class 1259 OID 16564)
-- Name: projets; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.projets (
    id_proj integer NOT NULL,
    "texte_proj " character varying(255) NOT NULL,
    "technnos_réa" character varying(255) NOT NULL,
    "lien_git_réa" character varying(255) NOT NULL
);


ALTER TABLE public.projets OWNER TO postgres;

--
-- TOC entry 198 (class 1259 OID 16551)
-- Name: présentation; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public."présentation" (
    "id_présentation" integer NOT NULL,
    "texte_présentation" character varying(255) NOT NULL
);


ALTER TABLE public."présentation" OWNER TO postgres;

--
-- TOC entry 2865 (class 0 OID 16572)
-- Dependencies: 201
-- Data for Name: acceuil; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.acceuil (id_accueil, "titre_acceuil ") FROM stdin;
1	pom
2	pompom
\.


--
-- TOC entry 2861 (class 0 OID 16546)
-- Dependencies: 197
-- Data for Name: compétence; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public."compétence" (id_comp, texte_comp) FROM stdin;
\.


--
-- TOC entry 2866 (class 0 OID 16577)
-- Dependencies: 202
-- Data for Name: contact; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.contact (id_contact, "adresse_contact ", "tel_contact ", "email_contact ") FROM stdin;
1	pompom	5	pompot@pot
\.


--
-- TOC entry 2863 (class 0 OID 16556)
-- Dependencies: 199
-- Data for Name: formations; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.formations (id_form, "date_début_form", date_fin_form, diplome_form, etablissement_form) FROM stdin;
\.


--
-- TOC entry 2867 (class 0 OID 16585)
-- Dependencies: 203
-- Data for Name: formulaire; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.formulaire (id_formulaire, "nom_formulaire ", "prénom_formulaire ", "tel_formulaire ", "email_formulaire ", "message_formulaire ") FROM stdin;
\.


--
-- TOC entry 2868 (class 0 OID 16648)
-- Dependencies: 204
-- Data for Name: formulaire1; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.formulaire1 (id_formulaire, nom_formulaire, "prénom_formulaire", email_formulaire, message_formulaire) FROM stdin;
\.


--
-- TOC entry 2860 (class 0 OID 16538)
-- Dependencies: 196
-- Data for Name: header; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.header (id_header, rubrique_header, photo_header, formulaire) FROM stdin;
\.


--
-- TOC entry 2864 (class 0 OID 16564)
-- Dependencies: 200
-- Data for Name: projets; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.projets (id_proj, "texte_proj ", "technnos_réa", "lien_git_réa") FROM stdin;
\.


--
-- TOC entry 2862 (class 0 OID 16551)
-- Dependencies: 198
-- Data for Name: présentation; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public."présentation" ("id_présentation", "texte_présentation") FROM stdin;
\.


--
-- TOC entry 2732 (class 2606 OID 16576)
-- Name: acceuil acceuil_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.acceuil
    ADD CONSTRAINT acceuil_pkey PRIMARY KEY (id_accueil);


--
-- TOC entry 2724 (class 2606 OID 16550)
-- Name: compétence compétence_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public."compétence"
    ADD CONSTRAINT "compétence_pkey" PRIMARY KEY (id_comp);


--
-- TOC entry 2734 (class 2606 OID 16584)
-- Name: contact contact_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.contact
    ADD CONSTRAINT contact_pkey PRIMARY KEY (id_contact);


--
-- TOC entry 2728 (class 2606 OID 16563)
-- Name: formations formations_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.formations
    ADD CONSTRAINT formations_pkey PRIMARY KEY (id_form);


--
-- TOC entry 2738 (class 2606 OID 16655)
-- Name: formulaire1 formulaire1_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.formulaire1
    ADD CONSTRAINT formulaire1_pkey PRIMARY KEY (id_formulaire);


--
-- TOC entry 2736 (class 2606 OID 16592)
-- Name: formulaire formulaire_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.formulaire
    ADD CONSTRAINT formulaire_pkey PRIMARY KEY (id_formulaire);


--
-- TOC entry 2722 (class 2606 OID 16545)
-- Name: header header_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.header
    ADD CONSTRAINT header_pkey PRIMARY KEY (id_header);


--
-- TOC entry 2730 (class 2606 OID 16571)
-- Name: projets projets_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.projets
    ADD CONSTRAINT projets_pkey PRIMARY KEY (id_proj);


--
-- TOC entry 2726 (class 2606 OID 16555)
-- Name: présentation présentation_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public."présentation"
    ADD CONSTRAINT "présentation_pkey" PRIMARY KEY ("id_présentation");


-- Completed on 2019-06-07 15:04:57

--
-- PostgreSQL database dump complete
--

