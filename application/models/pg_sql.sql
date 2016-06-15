--
-- PostgreSQL database dump
--

-- Dumped from database version 9.3.10
-- Dumped by pg_dump version 9.3.10
-- Started on 2015-11-05 17:29:45 BRST

SET statement_timeout = 0;
SET lock_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;

--
-- TOC entry 172 (class 3079 OID 11791)
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- TOC entry 1982 (class 0 OID 0)
-- Dependencies: 172
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- TOC entry 171 (class 1259 OID 16916)
-- Name: user; Type: TABLE; Schema: public; Owner: root; Tablespace: 
--

CREATE TABLE "user" (
    iduser integer NOT NULL,
    login character varying(200),
    password character varying(16)
);


ALTER TABLE public."user" OWNER TO root;

--
-- TOC entry 170 (class 1259 OID 16914)
-- Name: user_iduser_seq; Type: SEQUENCE; Schema: public; Owner: root
--

CREATE SEQUENCE user_iduser_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.user_iduser_seq OWNER TO root;

--
-- TOC entry 1983 (class 0 OID 0)
-- Dependencies: 170
-- Name: user_iduser_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: root
--

ALTER SEQUENCE user_iduser_seq OWNED BY "user".iduser;


--
-- TOC entry 1863 (class 2604 OID 16919)
-- Name: iduser; Type: DEFAULT; Schema: public; Owner: root
--

ALTER TABLE ONLY "user" ALTER COLUMN iduser SET DEFAULT nextval('user_iduser_seq'::regclass);


--
-- TOC entry 1974 (class 0 OID 16916)
-- Dependencies: 171
-- Data for Name: user; Type: TABLE DATA; Schema: public; Owner: root
--

COPY "user" (iduser, login, password) FROM stdin;
\.


--
-- TOC entry 1984 (class 0 OID 0)
-- Dependencies: 170
-- Name: user_iduser_seq; Type: SEQUENCE SET; Schema: public; Owner: root
--

SELECT pg_catalog.setval('user_iduser_seq', 1, false);


--
-- TOC entry 1865 (class 2606 OID 16921)
-- Name: iduser; Type: CONSTRAINT; Schema: public; Owner: root; Tablespace: 
--

ALTER TABLE ONLY "user"
    ADD CONSTRAINT iduser PRIMARY KEY (iduser);


--
-- TOC entry 1981 (class 0 OID 0)
-- Dependencies: 5
-- Name: public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


-- Completed on 2015-11-05 17:29:45 BRST

--
-- PostgreSQL database dump complete
--

