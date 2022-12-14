PGDMP         )                y            compro    13.3    13.3 Q    ?           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            @           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            A           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            B           1262    24780    compro    DATABASE     j   CREATE DATABASE compro WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE = 'English_United States.1252';
    DROP DATABASE compro;
                postgres    false            ?            1259    24783 
   migrations    TABLE     ?   CREATE TABLE public.migrations (
    id integer NOT NULL,
    migration character varying(255) NOT NULL,
    batch integer NOT NULL
);
    DROP TABLE public.migrations;
       public         heap    postgres    false            ?            1259    24781    migrations_id_seq    SEQUENCE     ?   CREATE SEQUENCE public.migrations_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.migrations_id_seq;
       public          postgres    false    201            C           0    0    migrations_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.migrations_id_seq OWNED BY public.migrations.id;
          public          postgres    false    200            ?            1259    24858    msfile    TABLE     ?  CREATE TABLE public.msfile (
    fileid bigint NOT NULL,
    filename character varying(255) NOT NULL,
    reftypeid integer NOT NULL,
    refid integer NOT NULL,
    createdby bigint,
    createddate timestamp(0) without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL,
    updatedby bigint,
    updateddate timestamp(0) without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL,
    isactive boolean DEFAULT true NOT NULL
);
    DROP TABLE public.msfile;
       public         heap    postgres    false            ?            1259    24856    msfile_fileid_seq    SEQUENCE     z   CREATE SEQUENCE public.msfile_fileid_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.msfile_fileid_seq;
       public          postgres    false    213            D           0    0    msfile_fileid_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.msfile_fileid_seq OWNED BY public.msfile.fileid;
          public          postgres    false    212            ?            1259    24816    msinfo    TABLE     q  CREATE TABLE public.msinfo (
    infoid bigint NOT NULL,
    infotypeid integer NOT NULL,
    descriptions text,
    createdby bigint,
    createddate timestamp(0) without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL,
    updatedby bigint,
    updateddate timestamp(0) without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL,
    isactive boolean DEFAULT true NOT NULL
);
    DROP TABLE public.msinfo;
       public         heap    postgres    false            ?            1259    24814    msinfo_infoid_seq    SEQUENCE     z   CREATE SEQUENCE public.msinfo_infoid_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.msinfo_infoid_seq;
       public          postgres    false    207            E           0    0    msinfo_infoid_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.msinfo_infoid_seq OWNED BY public.msinfo.infoid;
          public          postgres    false    206            ?            1259    24939    msmail    TABLE     ?  CREATE TABLE public.msmail (
    mailid bigint NOT NULL,
    name character varying(255) NOT NULL,
    email character varying(255) NOT NULL,
    email_body text NOT NULL,
    createdby bigint,
    createddate timestamp(0) without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL,
    updatedby bigint,
    updateddate timestamp(0) without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL,
    isactive boolean DEFAULT true NOT NULL
);
    DROP TABLE public.msmail;
       public         heap    postgres    false            ?            1259    24937    msmail_mailid_seq    SEQUENCE     z   CREATE SEQUENCE public.msmail_mailid_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.msmail_mailid_seq;
       public          postgres    false    221            F           0    0    msmail_mailid_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.msmail_mailid_seq OWNED BY public.msmail.mailid;
          public          postgres    false    220            ?            1259    24830 	   mspartner    TABLE     ?  CREATE TABLE public.mspartner (
    partnerid bigint NOT NULL,
    partnername character varying(255) NOT NULL,
    descriptions text,
    createdby bigint,
    createddate timestamp(0) without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL,
    updatedby bigint,
    updateddate timestamp(0) without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL,
    isactive boolean DEFAULT true NOT NULL
);
    DROP TABLE public.mspartner;
       public         heap    postgres    false            ?            1259    24828    mspartner_partnerid_seq    SEQUENCE     ?   CREATE SEQUENCE public.mspartner_partnerid_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 .   DROP SEQUENCE public.mspartner_partnerid_seq;
       public          postgres    false    209            G           0    0    mspartner_partnerid_seq    SEQUENCE OWNED BY     S   ALTER SEQUENCE public.mspartner_partnerid_seq OWNED BY public.mspartner.partnerid;
          public          postgres    false    208            ?            1259    24869    msportofolio    TABLE     ?  CREATE TABLE public.msportofolio (
    portofolioid bigint NOT NULL,
    portofolioname character varying(255) NOT NULL,
    descriptions text,
    createdby bigint,
    createddate timestamp(0) without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL,
    updatedby bigint,
    updateddate timestamp(0) without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL,
    isactive boolean DEFAULT true NOT NULL
);
     DROP TABLE public.msportofolio;
       public         heap    postgres    false            ?            1259    24867    msportofolio_portofolioid_seq    SEQUENCE     ?   CREATE SEQUENCE public.msportofolio_portofolioid_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 4   DROP SEQUENCE public.msportofolio_portofolioid_seq;
       public          postgres    false    215            H           0    0    msportofolio_portofolioid_seq    SEQUENCE OWNED BY     _   ALTER SEQUENCE public.msportofolio_portofolioid_seq OWNED BY public.msportofolio.portofolioid;
          public          postgres    false    214            ?            1259    24911 	   msservice    TABLE     ?  CREATE TABLE public.msservice (
    serviceid bigint NOT NULL,
    servicename character varying(255) NOT NULL,
    servicedesc text,
    createdby bigint,
    createddate timestamp(0) without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL,
    updatedby bigint,
    updateddate timestamp(0) without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL,
    isactive boolean DEFAULT true NOT NULL
);
    DROP TABLE public.msservice;
       public         heap    postgres    false            ?            1259    24909    msservice_serviceid_seq    SEQUENCE     ?   CREATE SEQUENCE public.msservice_serviceid_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 .   DROP SEQUENCE public.msservice_serviceid_seq;
       public          postgres    false    219            I           0    0    msservice_serviceid_seq    SEQUENCE OWNED BY     S   ALTER SEQUENCE public.msservice_serviceid_seq OWNED BY public.msservice.serviceid;
          public          postgres    false    218            ?            1259    24844    msteam    TABLE     ?  CREATE TABLE public.msteam (
    teamid bigint NOT NULL,
    teamname character varying(255) NOT NULL,
    teamjob character varying(255) NOT NULL,
    descriptions text,
    createdby bigint,
    createddate timestamp(0) without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL,
    updatedby bigint,
    updateddate timestamp(0) without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL,
    isactive boolean DEFAULT true NOT NULL
);
    DROP TABLE public.msteam;
       public         heap    postgres    false            ?            1259    24842    msteam_teamid_seq    SEQUENCE     z   CREATE SEQUENCE public.msteam_teamid_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.msteam_teamid_seq;
       public          postgres    false    211            J           0    0    msteam_teamid_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.msteam_teamid_seq OWNED BY public.msteam.teamid;
          public          postgres    false    210            ?            1259    24896    mstestimonial    TABLE     ?  CREATE TABLE public.mstestimonial (
    testimoniid bigint NOT NULL,
    testimonidesc character varying(255),
    testimonifrom text NOT NULL,
    createdby bigint,
    createddate timestamp(0) without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL,
    updatedby bigint,
    updateddate timestamp(0) without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL,
    isactive boolean DEFAULT true NOT NULL
);
 !   DROP TABLE public.mstestimonial;
       public         heap    postgres    false            ?            1259    24894    mstestimonial_testimoniid_seq    SEQUENCE     ?   CREATE SEQUENCE public.mstestimonial_testimoniid_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 4   DROP SEQUENCE public.mstestimonial_testimoniid_seq;
       public          postgres    false    217            K           0    0    mstestimonial_testimoniid_seq    SEQUENCE OWNED BY     _   ALTER SEQUENCE public.mstestimonial_testimoniid_seq OWNED BY public.mstestimonial.testimoniid;
          public          postgres    false    216            ?            1259    24805    mstype    TABLE     }  CREATE TABLE public.mstype (
    typeid bigint NOT NULL,
    typename character varying(255) NOT NULL,
    masterid integer,
    createdby bigint,
    createddate timestamp(0) without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL,
    updatedby bigint,
    updateddate timestamp(0) without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL,
    isactive boolean DEFAULT true NOT NULL
);
    DROP TABLE public.mstype;
       public         heap    postgres    false            ?            1259    24803    mstype_typeid_seq    SEQUENCE     z   CREATE SEQUENCE public.mstype_typeid_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.mstype_typeid_seq;
       public          postgres    false    205            L           0    0    mstype_typeid_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.mstype_typeid_seq OWNED BY public.mstype.typeid;
          public          postgres    false    204            ?            1259    24791    msuser    TABLE     ?  CREATE TABLE public.msuser (
    userid bigint NOT NULL,
    username character varying(50) NOT NULL,
    userpassword text NOT NULL,
    createdby bigint,
    createddate timestamp(0) without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL,
    updatedby bigint,
    updateddate timestamp(0) without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL,
    isactive boolean DEFAULT true NOT NULL
);
    DROP TABLE public.msuser;
       public         heap    postgres    false            ?            1259    24789    msuser_userid_seq    SEQUENCE     z   CREATE SEQUENCE public.msuser_userid_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.msuser_userid_seq;
       public          postgres    false    203            M           0    0    msuser_userid_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.msuser_userid_seq OWNED BY public.msuser.userid;
          public          postgres    false    202            f           2604    24786    migrations id    DEFAULT     n   ALTER TABLE ONLY public.migrations ALTER COLUMN id SET DEFAULT nextval('public.migrations_id_seq'::regclass);
 <   ALTER TABLE public.migrations ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    201    200    201            {           2604    24861    msfile fileid    DEFAULT     n   ALTER TABLE ONLY public.msfile ALTER COLUMN fileid SET DEFAULT nextval('public.msfile_fileid_seq'::regclass);
 <   ALTER TABLE public.msfile ALTER COLUMN fileid DROP DEFAULT;
       public          postgres    false    213    212    213            o           2604    24819    msinfo infoid    DEFAULT     n   ALTER TABLE ONLY public.msinfo ALTER COLUMN infoid SET DEFAULT nextval('public.msinfo_infoid_seq'::regclass);
 <   ALTER TABLE public.msinfo ALTER COLUMN infoid DROP DEFAULT;
       public          postgres    false    207    206    207            ?           2604    24942    msmail mailid    DEFAULT     n   ALTER TABLE ONLY public.msmail ALTER COLUMN mailid SET DEFAULT nextval('public.msmail_mailid_seq'::regclass);
 <   ALTER TABLE public.msmail ALTER COLUMN mailid DROP DEFAULT;
       public          postgres    false    220    221    221            s           2604    24833    mspartner partnerid    DEFAULT     z   ALTER TABLE ONLY public.mspartner ALTER COLUMN partnerid SET DEFAULT nextval('public.mspartner_partnerid_seq'::regclass);
 B   ALTER TABLE public.mspartner ALTER COLUMN partnerid DROP DEFAULT;
       public          postgres    false    208    209    209                       2604    24872    msportofolio portofolioid    DEFAULT     ?   ALTER TABLE ONLY public.msportofolio ALTER COLUMN portofolioid SET DEFAULT nextval('public.msportofolio_portofolioid_seq'::regclass);
 H   ALTER TABLE public.msportofolio ALTER COLUMN portofolioid DROP DEFAULT;
       public          postgres    false    214    215    215            ?           2604    24914    msservice serviceid    DEFAULT     z   ALTER TABLE ONLY public.msservice ALTER COLUMN serviceid SET DEFAULT nextval('public.msservice_serviceid_seq'::regclass);
 B   ALTER TABLE public.msservice ALTER COLUMN serviceid DROP DEFAULT;
       public          postgres    false    218    219    219            w           2604    24847    msteam teamid    DEFAULT     n   ALTER TABLE ONLY public.msteam ALTER COLUMN teamid SET DEFAULT nextval('public.msteam_teamid_seq'::regclass);
 <   ALTER TABLE public.msteam ALTER COLUMN teamid DROP DEFAULT;
       public          postgres    false    211    210    211            ?           2604    24899    mstestimonial testimoniid    DEFAULT     ?   ALTER TABLE ONLY public.mstestimonial ALTER COLUMN testimoniid SET DEFAULT nextval('public.mstestimonial_testimoniid_seq'::regclass);
 H   ALTER TABLE public.mstestimonial ALTER COLUMN testimoniid DROP DEFAULT;
       public          postgres    false    216    217    217            k           2604    24808    mstype typeid    DEFAULT     n   ALTER TABLE ONLY public.mstype ALTER COLUMN typeid SET DEFAULT nextval('public.mstype_typeid_seq'::regclass);
 <   ALTER TABLE public.mstype ALTER COLUMN typeid DROP DEFAULT;
       public          postgres    false    204    205    205            g           2604    24794    msuser userid    DEFAULT     n   ALTER TABLE ONLY public.msuser ALTER COLUMN userid SET DEFAULT nextval('public.msuser_userid_seq'::regclass);
 <   ALTER TABLE public.msuser ALTER COLUMN userid DROP DEFAULT;
       public          postgres    false    202    203    203            (          0    24783 
   migrations 
   TABLE DATA           :   COPY public.migrations (id, migration, batch) FROM stdin;
    public          postgres    false    201   ?b       4          0    24858    msfile 
   TABLE DATA           ~   COPY public.msfile (fileid, filename, reftypeid, refid, createdby, createddate, updatedby, updateddate, isactive) FROM stdin;
    public          postgres    false    213   ?c       .          0    24816    msinfo 
   TABLE DATA           |   COPY public.msinfo (infoid, infotypeid, descriptions, createdby, createddate, updatedby, updateddate, isactive) FROM stdin;
    public          postgres    false    207   ?f       <          0    24939    msmail 
   TABLE DATA           {   COPY public.msmail (mailid, name, email, email_body, createdby, createddate, updatedby, updateddate, isactive) FROM stdin;
    public          postgres    false    221   |h       0          0    24830 	   mspartner 
   TABLE DATA           ?   COPY public.mspartner (partnerid, partnername, descriptions, createdby, createddate, updatedby, updateddate, isactive) FROM stdin;
    public          postgres    false    209   ?k       6          0    24869    msportofolio 
   TABLE DATA           ?   COPY public.msportofolio (portofolioid, portofolioname, descriptions, createdby, createddate, updatedby, updateddate, isactive) FROM stdin;
    public          postgres    false    215   ?l       :          0    24911 	   msservice 
   TABLE DATA           ?   COPY public.msservice (serviceid, servicename, servicedesc, createdby, createddate, updatedby, updateddate, isactive) FROM stdin;
    public          postgres    false    219   ?n       2          0    24844    msteam 
   TABLE DATA           ?   COPY public.msteam (teamid, teamname, teamjob, descriptions, createdby, createddate, updatedby, updateddate, isactive) FROM stdin;
    public          postgres    false    211   jr       8          0    24896    mstestimonial 
   TABLE DATA           ?   COPY public.mstestimonial (testimoniid, testimonidesc, testimonifrom, createdby, createddate, updatedby, updateddate, isactive) FROM stdin;
    public          postgres    false    217   Xs       ,          0    24805    mstype 
   TABLE DATA           v   COPY public.mstype (typeid, typename, masterid, createdby, createddate, updatedby, updateddate, isactive) FROM stdin;
    public          postgres    false    205   it       *          0    24791    msuser 
   TABLE DATA           z   COPY public.msuser (userid, username, userpassword, createdby, createddate, updatedby, updateddate, isactive) FROM stdin;
    public          postgres    false    203   ?u       N           0    0    migrations_id_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('public.migrations_id_seq', 12, true);
          public          postgres    false    200            O           0    0    msfile_fileid_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.msfile_fileid_seq', 108, true);
          public          postgres    false    212            P           0    0    msinfo_infoid_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('public.msinfo_infoid_seq', 21, true);
          public          postgres    false    206            Q           0    0    msmail_mailid_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('public.msmail_mailid_seq', 21, true);
          public          postgres    false    220            R           0    0    mspartner_partnerid_seq    SEQUENCE SET     F   SELECT pg_catalog.setval('public.mspartner_partnerid_seq', 16, true);
          public          postgres    false    208            S           0    0    msportofolio_portofolioid_seq    SEQUENCE SET     L   SELECT pg_catalog.setval('public.msportofolio_portofolioid_seq', 13, true);
          public          postgres    false    214            T           0    0    msservice_serviceid_seq    SEQUENCE SET     E   SELECT pg_catalog.setval('public.msservice_serviceid_seq', 7, true);
          public          postgres    false    218            U           0    0    msteam_teamid_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('public.msteam_teamid_seq', 23, true);
          public          postgres    false    210            V           0    0    mstestimonial_testimoniid_seq    SEQUENCE SET     L   SELECT pg_catalog.setval('public.mstestimonial_testimoniid_seq', 12, true);
          public          postgres    false    216            W           0    0    mstype_typeid_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('public.mstype_typeid_seq', 34, true);
          public          postgres    false    204            X           0    0    msuser_userid_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('public.msuser_userid_seq', 9, true);
          public          postgres    false    202            ?           2606    24788    migrations migrations_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.migrations
    ADD CONSTRAINT migrations_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.migrations DROP CONSTRAINT migrations_pkey;
       public            postgres    false    201            ?           2606    24866    msfile msfile_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY public.msfile
    ADD CONSTRAINT msfile_pkey PRIMARY KEY (fileid);
 <   ALTER TABLE ONLY public.msfile DROP CONSTRAINT msfile_pkey;
       public            postgres    false    213            ?           2606    24827    msinfo msinfo_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY public.msinfo
    ADD CONSTRAINT msinfo_pkey PRIMARY KEY (infoid);
 <   ALTER TABLE ONLY public.msinfo DROP CONSTRAINT msinfo_pkey;
       public            postgres    false    207            ?           2606    24950    msmail msmail_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY public.msmail
    ADD CONSTRAINT msmail_pkey PRIMARY KEY (mailid);
 <   ALTER TABLE ONLY public.msmail DROP CONSTRAINT msmail_pkey;
       public            postgres    false    221            ?           2606    24841    mspartner mspartner_pkey 
   CONSTRAINT     ]   ALTER TABLE ONLY public.mspartner
    ADD CONSTRAINT mspartner_pkey PRIMARY KEY (partnerid);
 B   ALTER TABLE ONLY public.mspartner DROP CONSTRAINT mspartner_pkey;
       public            postgres    false    209            ?           2606    24880    msportofolio msportofolio_pkey 
   CONSTRAINT     f   ALTER TABLE ONLY public.msportofolio
    ADD CONSTRAINT msportofolio_pkey PRIMARY KEY (portofolioid);
 H   ALTER TABLE ONLY public.msportofolio DROP CONSTRAINT msportofolio_pkey;
       public            postgres    false    215            ?           2606    24922    msservice msservice_pkey 
   CONSTRAINT     ]   ALTER TABLE ONLY public.msservice
    ADD CONSTRAINT msservice_pkey PRIMARY KEY (serviceid);
 B   ALTER TABLE ONLY public.msservice DROP CONSTRAINT msservice_pkey;
       public            postgres    false    219            ?           2606    24855    msteam msteam_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY public.msteam
    ADD CONSTRAINT msteam_pkey PRIMARY KEY (teamid);
 <   ALTER TABLE ONLY public.msteam DROP CONSTRAINT msteam_pkey;
       public            postgres    false    211            ?           2606    24907     mstestimonial mstestimonial_pkey 
   CONSTRAINT     g   ALTER TABLE ONLY public.mstestimonial
    ADD CONSTRAINT mstestimonial_pkey PRIMARY KEY (testimoniid);
 J   ALTER TABLE ONLY public.mstestimonial DROP CONSTRAINT mstestimonial_pkey;
       public            postgres    false    217            ?           2606    24813    mstype mstype_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY public.mstype
    ADD CONSTRAINT mstype_pkey PRIMARY KEY (typeid);
 <   ALTER TABLE ONLY public.mstype DROP CONSTRAINT mstype_pkey;
       public            postgres    false    205            ?           2606    24802    msuser msuser_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY public.msuser
    ADD CONSTRAINT msuser_pkey PRIMARY KEY (userid);
 <   ALTER TABLE ONLY public.msuser DROP CONSTRAINT msuser_pkey;
       public            postgres    false    203            (   ?   x?}?ۊ? ??????Ac|??ŀ?Đ8}??@?!?z?-?E?029j???wۃ??-??v??u>I+\e?o?H?%l??딊T?Ͷ???ym?	[6M@?K?C/?I??\SM'RM@?s??k?X<Y???????qIk??s?`???O?~??u????x{?+ *?? J???????;jѾ?|?????      4   ?  x??V?r?0<S_?`??C?x???C????6㰵#?u??/h???S??@K`,,
?????F?v?8oi׷???Ӯ:YzqO]s"??$?/?3?i
??a?$????&???m??3?O?;d*??>))?;Pr*??Lhrt'????>\?????:ל???l?ls?t???6-=^???nc??,s?c?Hnx??}Vp"?x?a?ө????W?u???????Ow???QJ?BH&?МJ?>?w??D??x?i?<I?gR????T?ɣ(?H???*#??,rb??p%?L0???EM,b????R?0??%?X?f?L??R?&	?$?.??	aX??b3&???'\?`d?8#????.k
0\?R0R?$?J??b??=????;V???U??E4?EEe????_??=@V??R6QL??)?8??!T@?o?????!?8$??p71Z@E)q?
?4?R?M??v??Y?c|??~p???"O???YhPY#?(??? b?ʝcK???¨"?N???>W=:{d?????I?(? #??}K???kۣ??Ǵ??a\Fv?v???Zl?#?~.?W嚶E??W??????ڽ?????|??p? ?>????a??BYk2?????h+[?!?bSp?/??r??׶?v?ZW???[O?/w??_??XD4P+?|??N????"ܢm4p????O??*T???
?(6F???-6??{??oJ2Z?uc|???WcD??4	???m?`ы0ţ?s?g?OY????y      .   ?  x?uR?n?0<S_???b?+?!??Q.Z'?]?)? ?P-QH?\%q??Tv?8fgvgg?g?m?q??]?????rN?u_????=?Ǯ??$`m??)]?](??P?cK?գ ?h+?ť.E)P??н?
y'+S?JM!\H????QU?2???y??y??L???:??0??????5EsM?yj?X)?????0??cv?`??Ó&?<?R3<?R!??9-u??׷?tr>??????l1]~й????z??_?|???V?????Q?G??)?A)H??????e?z?0W?ǖ??^???K??Fm??*???	?.???????-aa #8?S??Ɵ?\?RZ??W?Ij??/??S?h?~???[O(?7?[}??G?c? ȳ???A??Kѻ?wP
?? ? ???
      <     x??V?n?0<K_?H=?ੇڦ(???岖H??C?Hq??K)FKD\?? a????r?4?ɞ????bG=????<?>?4??Z}k;??8?^??UmG?p4s7?j?e?c???? l%̎0%?K?j?a?????c??????{?H-??FjF4?Pⱇ??3B#7?¿9?G?7????ֺ??	{b]%8??+?jGf???+???7?q?{j?P?-???Q?d?m???J?4?i?	?.΢?P???xS?"?.??,?zS?,?..???`%7?X?
?ŅO?J|?3?..?W9?m?3?F???n?}???>r?T?q?43?+??I????=3???yeOI?-?!?ū??Q?g-Xd?+?>3?Z?kϰ(??p?`??`???yC?$i?yТ?.^G?"Ӡ??~????e1?z?W???MR??4?i??.?\?X?2t:n?>??{?O???#-'n?ȡ??? ??p:0???Y???(O?7??H??V??`??????h?x?&?!?C?y?????Q3?b(?d?????ѠFY;?bfD0?UF?,??~????.?%u??Y?$	?(?_3?|e??vh???GhF?"\?` ?xӰ?)Q??tƲF?+&?????K:<)?&*gU?׸?????????h:	?????^?𒸿&?t%-?!U??R??J??l?l`?y?X?	R!?.&?ۜ?,I?W*h61??????)mf":èt1??$?
???:???q?&???&N?a?,?8?)q?=      0   A  x????n?0???S??????t?˴?I?C?q	??,5H?i??@?N??-?bv~?SU?Yo?d@???7? ??h׻ ??A??r6?b?@j??`O?2?????q???di??2$?^??= ?F???1?|2?%???????Ci&pL???!i??X29???Qnp>%Q?S??%??(??&????V<????W?~-v??.?jZ?Ӫ???ʶ?/?d.?Z???R????Y,???k.6?q\?7b?eW5cr&ֈ'???ׅKݎ?׃?HVF&u????D?Yt?zL?b)?Hc?z\?U??:?e.v??(~?g?      6   ?  x????n?0???S??K?Y???F?À?e?n+???\CĒ\??????0???{o?/?#E?F??}Ͽ?꪿?????]?????V?Yn?f?U`VuY??zN?V7???#???D???g?f?????U???dѕ2????????ڜcN?h??-??_??KȪ?M]s??K?Cv~b~?Y?>D??? ??%??ƻ@??????C??????M	@??-?>%?k??6:?(??C??	M`??!`?O??C??????w???????2??ʸ??uh"?Ax?4!?O?@???'?@*%˙????:???????S??? ?9?Zdf?UQ??fF]?????]?x???b?_???l??ܲ.6sr?s?v???m???磻?j\?yU??Rk??xB?      :   ?  x?}Uˮ?6]?_?]7?k?ܢ?E E6Y?(??dCK#?0E???ʪ???????H򣀻?I???3?7??@??S???k)T?z׿????m?&GӸ?$2?d??t?ll??qqΉBͦ??T??mp???B??2?>??eV/jW9?w?wB??1?M?Uُ?΁F#?s???yg.U??????????D???㹃S??=!J(??bc;??4)v?sA??????_ɰ??????&??Y}??Rv9??ңu???`q"ߛ?^???zWe???XB???h????v	??-?`\T_I??}HT?J??ݻo???/????O???????9?_?߽?t??ϫ??*?l~?-??? ?:h
H?=XqGOJZ'????G=Ga?`d=GC?1?zs ??J????X??8??M8?̯'?????????P^?f?	?????j?d$u1?>z??f?P[l?Ш???]R?:9?2??E??D!E??????CL-_5?|C?P4???8??NZ??Uq? E??x7y?G?;?`???zmq5y???fg3Ւ	?g?8ME??#.{???@㢠@?R????-=E?-Fƻ3??_(q?h$??GU?Ϗ?????d>L?:+I????*	6v?L?t?U????<?h?3??P?{?=}?eg????PR?.?L?{@C???qa^al?L???uE?Pɬ?????HT???UU? (u??%?8-??d?)???_?`l_4?am?`?$>??]3w???pi S???d,i?y<d??e?t??O????	??????DY????Q',??q?t?!?%?[?V@??D??N(w?????P???e ???(??"?S?RL???8m??\Ț??y"}?M-m???J??Y?7K??eL?G"?<z????????7?c???L,???!W?!f'sٗ?G&????5I?gx?,??H?f????2Q?t(eZ??^ek>???ӣ?f?e?^???>??      2   ?   x???OK1????S??[?L?????+BOB/?n???	??ޭ??`??2??ǳ?????8??{??ImS8?0??1[???T?,~?????1b_???'c|G>ZL?va?.??c?????B_??q~?%=4?????T4??)$m??hy)?P??????듊?????*??a[S???DU?H???tg??:Q<?c??=??x??(??4?D??H}???ͅ_???y      8     x???;n?0?g?<@?????Z
t??JD@T?XT??W????ğ?G????/oa&Sv`?3$@Gr |"-$y49i?7 ?%?Ȕ ??B.?f??????ů??M?????=c???68^?%Dw?{?>$????Y??p???E??J^?8?2?ɱaYܕ??z@%??)^?????ꚮ=6ñ??~???-YT?7?^Q?????dQ?????7?ҩْE??s?Lx`?0uÖ,?Z+?? ꯋw      ,   A  x?u??j?0E??W?R4zٞ](??????Qb???????i?x@???;Oi?ڟ?8?MO+Um?/??Vh??4b??ǁ;??,k??c?}?? t?j?%???Y??vi???.????
?GWq8K/??????Q??r?j4???T?E??? (Д?=???????p??b?VS?&?ۦ?8??ɝ?$????eUJ{b1I?u??p?ǡu?????>???R?.?VO??vY??L????f????r8K??{??S\)PS??I}]?lB~k?8L&V????o??v
??e8L_ľ??+?b`Z?󔁡Y???:3?      *   o  x?u??r?@ ??S??58?2??( ?O\1P?̢(?H?ѧ??n?J*???Հ??X?hD.#?#F??S??6??\??l??[?/GL?y?S7W8??Nuf???5XUo??Gx??O0????{XH????-:??嫱????1???Q9?m???Ӏ??j?c?ֈٶJ?k?]|??gWt?{XH??)nM???z???wf?????β???6D#??j??;?BC??|??? ?b?c|?
i??.?(&??:?:5?/???ބ?VV'???5#?G?Kֵ?<?+?e??g7???u?ݡBb???????<g??+?p?e???1e??n?Ѐ8??]???!Ȝt=?2??~?!D????*?WY???΍??     