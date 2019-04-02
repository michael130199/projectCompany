/*Agregando Datos a la Tabla Cliente*/
INSERT INTO public.cliente SET ci_cli = 24889345, telf=04264971234, domicilio='AV. LIBERTADOR, EDIFICIO NEA, URBANIZACION MARIPEREZ', razon_social='CANTV';
INSERT INTO public.cliente SET ci_cli = 20424423, telf=04165645646, domicilio='Av. Principal El Bosque, entre Av. Arboleda y. Urb. El Bosq Caracas 1060 Distrito Federal VE, Av Francisco Solano Lopez, Caracas, Distrito Capital', razon_social='SUNDDE';
INSERT INTO public.cliente SET ci_cli = 17342495, telf=04144425559, domicilio='', razon_social='CocaCola';
INSERT INTO public.cliente SET ci_cli = 14234255, telf=04120012340, domicilio='', razon_social='Farmatodo';
INSERT INTO public.cliente SET ci_cli = 18432453, telf=04164971234, domicilio='', razon_social='Banco de Venezuela';
INSERT INTO public.cliente SET ci_cli = 17455890, telf=04261232562, domicilio='AV. LIBERTADOR, EDIFICIO NEA, URBANIZACION MARIPEREZ', razon_social='CANTV';
INSERT INTO public.cliente SET ci_cli = 15623473, telf=04146547933, domicilio='', razon_social='Nintendo';
INSERT INTO public.cliente SET ci_cli = 9355542 , telf=04124545645, domicilio='', razon_social='Farmatodo';

UPDATE public.cliente SET telf=,domicilio='',razon_social='';
DELETE FROM public.cliente WHERE ci_cli='';

-- Mostrar toda la Tabla
SELECT * FROM public.cliente;

-- muestra el numero de filas
SELECT COUNT(*) FROM public.cliente;


