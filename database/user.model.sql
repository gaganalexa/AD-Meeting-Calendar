DROP TABLE IF EXISTS public.users CASCADE;

CREATE TABLE public.users (
    id uuid PRIMARY KEY DEFAULT gen_random_uuid (),
    first_name varchar(225) NOT NULL,
    middle_name varchar(225),
    last_name varchar(225) NOT NULL,
    password varchar(225) NOT NULL,
    username varchar(225) NOT NULL UNIQUE,
    role varchar(225) NOT NULL
);