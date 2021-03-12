PGDMP     +                    y         
   laravelpos #   12.6 (Ubuntu 12.6-0ubuntu0.20.04.1) #   12.6 (Ubuntu 12.6-0ubuntu0.20.04.1) B    �           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            �           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            �           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            �           1262    16424 
   laravelpos    DATABASE     z   CREATE DATABASE laravelpos WITH TEMPLATE = template0 ENCODING = 'UTF8' LC_COLLATE = 'en_US.utf8' LC_CTYPE = 'en_US.utf8';
    DROP DATABASE laravelpos;
                rivaldi    false            �            1259    16455    failed_jobs    TABLE     &  CREATE TABLE public.failed_jobs (
    id bigint NOT NULL,
    uuid character varying(255) NOT NULL,
    connection text NOT NULL,
    queue text NOT NULL,
    payload text NOT NULL,
    exception text NOT NULL,
    failed_at timestamp(0) without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL
);
    DROP TABLE public.failed_jobs;
       public         heap    rivaldi    false            �            1259    16453    failed_jobs_id_seq    SEQUENCE     {   CREATE SEQUENCE public.failed_jobs_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.failed_jobs_id_seq;
       public          rivaldi    false    208            �           0    0    failed_jobs_id_seq    SEQUENCE OWNED BY     I   ALTER SEQUENCE public.failed_jobs_id_seq OWNED BY public.failed_jobs.id;
          public          rivaldi    false    207            �            1259    16427 
   migrations    TABLE     �   CREATE TABLE public.migrations (
    id integer NOT NULL,
    migration character varying(255) NOT NULL,
    batch integer NOT NULL
);
    DROP TABLE public.migrations;
       public         heap    rivaldi    false            �            1259    16425    migrations_id_seq    SEQUENCE     �   CREATE SEQUENCE public.migrations_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.migrations_id_seq;
       public          rivaldi    false    203            �           0    0    migrations_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.migrations_id_seq OWNED BY public.migrations.id;
          public          rivaldi    false    202            �            1259    16446    password_resets    TABLE     �   CREATE TABLE public.password_resets (
    email character varying(255) NOT NULL,
    token character varying(255) NOT NULL,
    created_at timestamp(0) without time zone
);
 #   DROP TABLE public.password_resets;
       public         heap    rivaldi    false            �            1259    16563    tblcategory    TABLE       CREATE TABLE public.tblcategory (
    id bigint NOT NULL,
    category_name character varying(255) NOT NULL,
    deleted_at timestamp(0) without time zone,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    uuid character varying(255)
);
    DROP TABLE public.tblcategory;
       public         heap    rivaldi    false            �            1259    16561    tblcategory_id_seq    SEQUENCE     {   CREATE SEQUENCE public.tblcategory_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.tblcategory_id_seq;
       public          rivaldi    false    212            �           0    0    tblcategory_id_seq    SEQUENCE OWNED BY     I   ALTER SEQUENCE public.tblcategory_id_seq OWNED BY public.tblcategory.id;
          public          rivaldi    false    211            �            1259    16550 
   tblproduct    TABLE     �  CREATE TABLE public.tblproduct (
    id bigint NOT NULL,
    uuid character varying(255) NOT NULL,
    name character varying(255) NOT NULL,
    slug character varying(255) NOT NULL,
    description text NOT NULL,
    price integer NOT NULL,
    quantity integer NOT NULL,
    deleted_at timestamp(0) without time zone,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    category_id character varying(255) NOT NULL
);
    DROP TABLE public.tblproduct;
       public         heap    rivaldi    false            �            1259    16548    tblproduct_id_seq    SEQUENCE     z   CREATE SEQUENCE public.tblproduct_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.tblproduct_id_seq;
       public          rivaldi    false    210            �           0    0    tblproduct_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.tblproduct_id_seq OWNED BY public.tblproduct.id;
          public          rivaldi    false    209            �            1259    16589    tblproductgallery    TABLE     L  CREATE TABLE public.tblproductgallery (
    id bigint NOT NULL,
    products_id character varying(255) NOT NULL,
    photo character varying(255) NOT NULL,
    is_default boolean NOT NULL,
    deleted_at timestamp(0) without time zone,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 %   DROP TABLE public.tblproductgallery;
       public         heap    rivaldi    false            �            1259    16587    tblproductgallery_id_seq    SEQUENCE     �   CREATE SEQUENCE public.tblproductgallery_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 /   DROP SEQUENCE public.tblproductgallery_id_seq;
       public          rivaldi    false    214            �           0    0    tblproductgallery_id_seq    SEQUENCE OWNED BY     U   ALTER SEQUENCE public.tblproductgallery_id_seq OWNED BY public.tblproductgallery.id;
          public          rivaldi    false    213            �            1259    16601    tbltransaction    TABLE       CREATE TABLE public.tbltransaction (
    id bigint NOT NULL,
    uuid character varying(255) NOT NULL,
    name character varying(255) NOT NULL,
    email character varying(255) NOT NULL,
    number character varying(255) NOT NULL,
    address character varying(255) NOT NULL,
    transaction_total integer NOT NULL,
    transaction_status character varying(255) NOT NULL,
    deleted_at timestamp(0) without time zone,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 "   DROP TABLE public.tbltransaction;
       public         heap    rivaldi    false            �            1259    16599    tbltransaction_id_seq    SEQUENCE     ~   CREATE SEQUENCE public.tbltransaction_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ,   DROP SEQUENCE public.tbltransaction_id_seq;
       public          rivaldi    false    216            �           0    0    tbltransaction_id_seq    SEQUENCE OWNED BY     O   ALTER SEQUENCE public.tbltransaction_id_seq OWNED BY public.tbltransaction.id;
          public          rivaldi    false    215            �            1259    16612    tbltransactiondetail    TABLE       CREATE TABLE public.tbltransactiondetail (
    id bigint NOT NULL,
    transaction_id integer NOT NULL,
    products_id integer NOT NULL,
    deleted_at timestamp(0) without time zone,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 (   DROP TABLE public.tbltransactiondetail;
       public         heap    rivaldi    false            �            1259    16610    tbltransactiondetail_id_seq    SEQUENCE     �   CREATE SEQUENCE public.tbltransactiondetail_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 2   DROP SEQUENCE public.tbltransactiondetail_id_seq;
       public          rivaldi    false    218            �           0    0    tbltransactiondetail_id_seq    SEQUENCE OWNED BY     [   ALTER SEQUENCE public.tbltransactiondetail_id_seq OWNED BY public.tbltransactiondetail.id;
          public          rivaldi    false    217            �            1259    16435    users    TABLE     �  CREATE TABLE public.users (
    id bigint NOT NULL,
    name character varying(255) NOT NULL,
    email character varying(255) NOT NULL,
    email_verified_at timestamp(0) without time zone,
    password character varying(255) NOT NULL,
    remember_token character varying(100),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    username character varying(255),
    level character varying(255)
);
    DROP TABLE public.users;
       public         heap    rivaldi    false            �            1259    16433    users_id_seq    SEQUENCE     u   CREATE SEQUENCE public.users_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 #   DROP SEQUENCE public.users_id_seq;
       public          rivaldi    false    205            �           0    0    users_id_seq    SEQUENCE OWNED BY     =   ALTER SEQUENCE public.users_id_seq OWNED BY public.users.id;
          public          rivaldi    false    204            E           2604    16458    failed_jobs id    DEFAULT     p   ALTER TABLE ONLY public.failed_jobs ALTER COLUMN id SET DEFAULT nextval('public.failed_jobs_id_seq'::regclass);
 =   ALTER TABLE public.failed_jobs ALTER COLUMN id DROP DEFAULT;
       public          rivaldi    false    207    208    208            C           2604    16430    migrations id    DEFAULT     n   ALTER TABLE ONLY public.migrations ALTER COLUMN id SET DEFAULT nextval('public.migrations_id_seq'::regclass);
 <   ALTER TABLE public.migrations ALTER COLUMN id DROP DEFAULT;
       public          rivaldi    false    203    202    203            H           2604    16566    tblcategory id    DEFAULT     p   ALTER TABLE ONLY public.tblcategory ALTER COLUMN id SET DEFAULT nextval('public.tblcategory_id_seq'::regclass);
 =   ALTER TABLE public.tblcategory ALTER COLUMN id DROP DEFAULT;
       public          rivaldi    false    212    211    212            G           2604    16553    tblproduct id    DEFAULT     n   ALTER TABLE ONLY public.tblproduct ALTER COLUMN id SET DEFAULT nextval('public.tblproduct_id_seq'::regclass);
 <   ALTER TABLE public.tblproduct ALTER COLUMN id DROP DEFAULT;
       public          rivaldi    false    210    209    210            I           2604    16592    tblproductgallery id    DEFAULT     |   ALTER TABLE ONLY public.tblproductgallery ALTER COLUMN id SET DEFAULT nextval('public.tblproductgallery_id_seq'::regclass);
 C   ALTER TABLE public.tblproductgallery ALTER COLUMN id DROP DEFAULT;
       public          rivaldi    false    213    214    214            J           2604    16604    tbltransaction id    DEFAULT     v   ALTER TABLE ONLY public.tbltransaction ALTER COLUMN id SET DEFAULT nextval('public.tbltransaction_id_seq'::regclass);
 @   ALTER TABLE public.tbltransaction ALTER COLUMN id DROP DEFAULT;
       public          rivaldi    false    216    215    216            K           2604    16615    tbltransactiondetail id    DEFAULT     �   ALTER TABLE ONLY public.tbltransactiondetail ALTER COLUMN id SET DEFAULT nextval('public.tbltransactiondetail_id_seq'::regclass);
 F   ALTER TABLE public.tbltransactiondetail ALTER COLUMN id DROP DEFAULT;
       public          rivaldi    false    218    217    218            D           2604    16438    users id    DEFAULT     d   ALTER TABLE ONLY public.users ALTER COLUMN id SET DEFAULT nextval('public.users_id_seq'::regclass);
 7   ALTER TABLE public.users ALTER COLUMN id DROP DEFAULT;
       public          rivaldi    false    204    205    205            �          0    16455    failed_jobs 
   TABLE DATA           a   COPY public.failed_jobs (id, uuid, connection, queue, payload, exception, failed_at) FROM stdin;
    public          rivaldi    false    208   yO       �          0    16427 
   migrations 
   TABLE DATA           :   COPY public.migrations (id, migration, batch) FROM stdin;
    public          rivaldi    false    203   �O       �          0    16446    password_resets 
   TABLE DATA           C   COPY public.password_resets (email, token, created_at) FROM stdin;
    public          rivaldi    false    206   Q       �          0    16563    tblcategory 
   TABLE DATA           b   COPY public.tblcategory (id, category_name, deleted_at, created_at, updated_at, uuid) FROM stdin;
    public          rivaldi    false    212   :Q       �          0    16550 
   tblproduct 
   TABLE DATA           �   COPY public.tblproduct (id, uuid, name, slug, description, price, quantity, deleted_at, created_at, updated_at, category_id) FROM stdin;
    public          rivaldi    false    210   �Q       �          0    16589    tblproductgallery 
   TABLE DATA           s   COPY public.tblproductgallery (id, products_id, photo, is_default, deleted_at, created_at, updated_at) FROM stdin;
    public          rivaldi    false    214   �U       �          0    16601    tbltransaction 
   TABLE DATA           �   COPY public.tbltransaction (id, uuid, name, email, number, address, transaction_total, transaction_status, deleted_at, created_at, updated_at) FROM stdin;
    public          rivaldi    false    216   \V       �          0    16612    tbltransactiondetail 
   TABLE DATA           s   COPY public.tbltransactiondetail (id, transaction_id, products_id, deleted_at, created_at, updated_at) FROM stdin;
    public          rivaldi    false    218   6W       �          0    16435    users 
   TABLE DATA           �   COPY public.users (id, name, email, email_verified_at, password, remember_token, created_at, updated_at, username, level) FROM stdin;
    public          rivaldi    false    205   sW                   0    0    failed_jobs_id_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.failed_jobs_id_seq', 1, false);
          public          rivaldi    false    207                       0    0    migrations_id_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('public.migrations_id_seq', 22, true);
          public          rivaldi    false    202                       0    0    tblcategory_id_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('public.tblcategory_id_seq', 8, true);
          public          rivaldi    false    211                       0    0    tblproduct_id_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('public.tblproduct_id_seq', 23, true);
          public          rivaldi    false    209                       0    0    tblproductgallery_id_seq    SEQUENCE SET     G   SELECT pg_catalog.setval('public.tblproductgallery_id_seq', 31, true);
          public          rivaldi    false    213                       0    0    tbltransaction_id_seq    SEQUENCE SET     C   SELECT pg_catalog.setval('public.tbltransaction_id_seq', 7, true);
          public          rivaldi    false    215                       0    0    tbltransactiondetail_id_seq    SEQUENCE SET     I   SELECT pg_catalog.setval('public.tbltransactiondetail_id_seq', 2, true);
          public          rivaldi    false    217                       0    0    users_id_seq    SEQUENCE SET     ;   SELECT pg_catalog.setval('public.users_id_seq', 26, true);
          public          rivaldi    false    204            T           2606    16464    failed_jobs failed_jobs_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.failed_jobs
    ADD CONSTRAINT failed_jobs_pkey PRIMARY KEY (id);
 F   ALTER TABLE ONLY public.failed_jobs DROP CONSTRAINT failed_jobs_pkey;
       public            rivaldi    false    208            V           2606    16466 #   failed_jobs failed_jobs_uuid_unique 
   CONSTRAINT     ^   ALTER TABLE ONLY public.failed_jobs
    ADD CONSTRAINT failed_jobs_uuid_unique UNIQUE (uuid);
 M   ALTER TABLE ONLY public.failed_jobs DROP CONSTRAINT failed_jobs_uuid_unique;
       public            rivaldi    false    208            M           2606    16432    migrations migrations_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.migrations
    ADD CONSTRAINT migrations_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.migrations DROP CONSTRAINT migrations_pkey;
       public            rivaldi    false    203            \           2606    16568    tblcategory tblcategory_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.tblcategory
    ADD CONSTRAINT tblcategory_pkey PRIMARY KEY (id);
 F   ALTER TABLE ONLY public.tblcategory DROP CONSTRAINT tblcategory_pkey;
       public            rivaldi    false    212            X           2606    16558    tblproduct tblproduct_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.tblproduct
    ADD CONSTRAINT tblproduct_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.tblproduct DROP CONSTRAINT tblproduct_pkey;
       public            rivaldi    false    210            Z           2606    16560 !   tblproduct tblproduct_uuid_unique 
   CONSTRAINT     \   ALTER TABLE ONLY public.tblproduct
    ADD CONSTRAINT tblproduct_uuid_unique UNIQUE (uuid);
 K   ALTER TABLE ONLY public.tblproduct DROP CONSTRAINT tblproduct_uuid_unique;
       public            rivaldi    false    210            ^           2606    16597 (   tblproductgallery tblproductgallery_pkey 
   CONSTRAINT     f   ALTER TABLE ONLY public.tblproductgallery
    ADD CONSTRAINT tblproductgallery_pkey PRIMARY KEY (id);
 R   ALTER TABLE ONLY public.tblproductgallery DROP CONSTRAINT tblproductgallery_pkey;
       public            rivaldi    false    214            `           2606    16609 "   tbltransaction tbltransaction_pkey 
   CONSTRAINT     `   ALTER TABLE ONLY public.tbltransaction
    ADD CONSTRAINT tbltransaction_pkey PRIMARY KEY (id);
 L   ALTER TABLE ONLY public.tbltransaction DROP CONSTRAINT tbltransaction_pkey;
       public            rivaldi    false    216            b           2606    16617 .   tbltransactiondetail tbltransactiondetail_pkey 
   CONSTRAINT     l   ALTER TABLE ONLY public.tbltransactiondetail
    ADD CONSTRAINT tbltransactiondetail_pkey PRIMARY KEY (id);
 X   ALTER TABLE ONLY public.tbltransactiondetail DROP CONSTRAINT tbltransactiondetail_pkey;
       public            rivaldi    false    218            O           2606    16445    users users_email_unique 
   CONSTRAINT     T   ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_email_unique UNIQUE (email);
 B   ALTER TABLE ONLY public.users DROP CONSTRAINT users_email_unique;
       public            rivaldi    false    205            Q           2606    16443    users users_pkey 
   CONSTRAINT     N   ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);
 :   ALTER TABLE ONLY public.users DROP CONSTRAINT users_pkey;
       public            rivaldi    false    205            R           1259    16452    password_resets_email_index    INDEX     X   CREATE INDEX password_resets_email_index ON public.password_resets USING btree (email);
 /   DROP INDEX public.password_resets_email_index;
       public            rivaldi    false    206            �      x������ � �      �   w  x���mo� �?�~�� �_�Z����E�����Z[t�$���poH�r(���N��n�<D����=�X�_>��04n����I���n���ێ��w\e����,Q%�a�xJm��@��"�7�4�>yXX	U���^�|���ga�[	��}�^�-yEb}��/�=�VP?�h%
�|Ӹ����k7�w�na���	����Ω��R=X@�u�>�fH+N�0Z��7�u�v
��%f�Ip?��ifH�z�+񜗀�i���J��i�4-��4�0��@����vU�����N��4*)���%���(� ��c�CFۿ��Sީ�i�p5��ֆ���Z�������h��3;_��
$�� ~YS      �      x������ � �      �   �   x�m�;
�0���>E.�"�r�xi�.-����By��u�K���C���㰯i��_�A2�r ���_؃#�������i-P�-�7bQ�ꑎa�e���2`Yj�|�W��1n_ �AW!��Pl@ȳwV�:���~�8?,����\��x��fݟ��o�IP      �   �  x��T�n�8}V�b�E�5U��.V�M'F�4��u�-�ז(H��}����HJZg��5l�����Ν��2��`\p�$j��ۺ���)��F����>���1���0�t1$��C��{�������Z�jK��l�*7�j�sYT`0�*�5x�O�JHk��:�V�
�u�->o$��a�w��(!6�h��4��+X\$07wY1B��'�$7b>�xN�d�:G����\�8?�r���F'2�l��O�aed��&�Z��]Y�����C�b��,e�l��R�ݩf]�`��kY�ǐn��l�􄜂�2�׶����K������[�p�%�;p&wH����	d��+sL�.��ů_�P��.���J�5�?Bfʕ��:P�A��T�Z�����ak��"@��.�=̋�
k������o��'Ё�5��#�<D6D]$�S�q|���-�i���ZY��D�
'��1c����]�.�S,����!{�vh�R綈��y�e؄�wcCUwn�Q���=vi�{S+���}u˻��5��]��[�j�LEl7RC�`Y4��<#�)��t�&�Wp���a�����3B

��0��������ϙ'���+7��0
�w)��1�dN9I�:~^�@z6;;�O?_���r��GF�D�R�o�!�}��N;�U��ڕ
��t��nd�J[�zb,z"Ɵ1���`��q�Eg�/�wȔ{����{L���jip�ܨ��=�ie���{�3���>�y��
gߧ��)��.�<�ܑh�"=M�<tb��t��|1�	��4�-��!fEa�p����-�t��כ�n-qG��-v-7�:,��n�'�10{㘲Cb?���Ÿgc �Ny x�;3U���i�d-s���-D��y��35�]��هZ58���25m�"�Ư�U[7<�G��B��?1s�a�8��g���GGG�?��      �   t   x�36����00231�0�L,.N-)�/(�O)M2�L�R����S]�s�]�*R
���JC3�J|��r"�=���S��
�9K8c�8��uu�M����LͰ�q��qqq �'"�      �   �   x����j�P������(3s&�o�b�U4�Qp�fhѦ&�ԫה.쪳���aV�M���
�2;mO]�o�����0D�b��ً~k�}umw 
�s�O���02��3�d%I���>��������h4.˻>��&)����Cp9²:�~ol�E�-1�t���S�C߁��0c��~���Dd�Cc��4]      �   -   x�3�4�44���4202�50�52P04�20�2��&����� �	�      �   �   x�m�M�@E��p�6�756�*#"�����W������K�hy�s/�dyɕ[��MG�K4��Fu�&iL<v��z���:DU�� �H�&�x_�]۞mW�1�ZУ�R �rk����2�P�0p��T� �g�`�U㰀�M�Ĩ�/��x0�� �!��l��ũ�8��F�     