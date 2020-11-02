drop database smitedexsantiagofagliano;

create database SmiteDexSantiagoFagliano;

use smitedexsantiagofagliano;

create table Usuario(
id int not null,
usuario varchar(20),
contrasenia text,
primary key (id)
);
create table Dios(
id int not null,
nombre varchar(30) not null,
pantheon varchar(15) not null,
rol varchar(15) not null,
url_imagen varchar(30),
descripcion text not null,
primary key (id)
);

insert into Dios (id, nombre, pantheon, rol, url_imagen, descripcion)
values (1,"Neith","Egipcio", "Cazador", "Neith.jpg", "Cuando comenzó el tiempo, solo había un sinfín de aguas negras. Sin embargo, del agua proviene toda la vida, y de esta fuerza primordial nació la primera de las Diosas, Neith. A medida que las aguas continuaron formando el mundo y todo lo que había dentro de él, el instinto natural de Neith de proteger y nutrir a la gente la llevó a defender la caza. Con carne los alimentó y con pieles los vistió, pero a medida que las personas a las que buscaba proteger envejecían, enfermaban o morían en el campo de batalla, la compasión de Neith la obligó a cambiar su vocación. Con dedos ágiles, la Diosa tejió mortajas para proteger a los espíritus perdidos de los muertos en su viaje al inframundo, dejando un hilo suelto que pudo rastrear mientras los fantasmas se aventuraban río abajo. A medida que pasaba el tiempo, más y más hilos se extendían por el mundo, tejiendo un intrincado patrón del destino que solo Neith podía ver. Ahora, la guerra entre dioses se vuelve cada vez más febril, y Neith ya no puede quedarse sin hacer nada. Los hilos del destino se están deshilachando en los bordes y una vez más debe levantar su arco y cazar, o ver el mundo regresar a las aguas de donde vino."),
(2,"Baco","Romano", "Guardian", "Baco.jpg", "Ninguno es más consecuente a este credo que Baco, el dios romano del vino, de comportamiento lascivo y locura. Después de pasar gran parte de sus años de formación con su mentor impresionantemente intoxicado Solino, a quien Baco ama como un padre, el Dios del Vino ahora es un trotamundos y maestro."),
(3,"Izanami","Japones", "Cazador", "Izanami.jpg", "Cuando Izanami dio a luz al dios del fuego, su piel abrasadora quemó su carne. Temiendo que muriera, su esposo, Izanagi, el hombre con el que había creado el mundo, la abrazó y lloró. Pero fue demasiado tarde. Tan graves fueron las heridas que Izanami sucumbió a la muerte. Para rescatar su alma, Izanagi viajó a Yomi, el reino de la oscuridad y la muerte. Buscó a través del laberinto negro, hasta que finalmente la encontró, escondida entre las sombras. Le imploró que regresara con él. No podía, porque ya había comido la fruta que crecía en Yomi. Insistió Izanagi. No la dejaría en este lugar. Lo juró. Izanami accedió a llevar a su esposo a ver a los dioses de Yomi, para implorarles que la liberaran. Mientras tanto, permanezca en la oscuridad, le advirtió, porque el reino de los muertos no estaba destinado a ser visto por los vivos. Tomado por un presentimiento, Izanagi encendió una antorcha y posó los ojos sobre su esposa. Izanami ya no era la elegante y elegante belleza que alguna vez fue, ahora parecía un cadáver en descomposición, vacío y podrido, lleno de gusanos y asqueroso. Asustado y disgustado, Izanagi rompió su voto y huyó. Corrió por las entrañas de Yomi, perseguido por el demonio que una vez fue su esposa. Escapando de la entrada de la cueva, Izanagi rodó una roca en su lugar para bloquearla. Sellada por dentro, traicionada y maldecida, consumida por la ira airada, Izanami juró que tomaría mil vidas cada día. Mil para pagar la promesa incumplida que hizo. Desde entonces, Izanami ha mantenido su voto, cada día llegando más allá de la tumba para atraer almas a Yomi. Pero la guerra ha roto la roca que una vez la mantuvo sellada, e Izanami ha emergido, fría y sin vida, pero ardiendo en venganza contra todo lo que vive. Mil almas no serán suficientes."),
(4,"Kukulkan","Maya", "Mago", "Kukulkan.jpg", "Sobre los fuertes vientos de las tierras mayas cabalga la serpiente emplumada, Kukulkan. Impresionante y terrible de contemplar, majestuoso pero siniestro, Kukulkan encarna el peligro y la belleza de una espada de doble filo. El tiempo ha desgastado el conocimiento de este Dios como la brisa sobre una piedra. Quizás Kukulkan prefiere esto. Se le conoce por muchos nombres y tiene el rostro de un hombre y una bestia, y se le adora con el tipo de reverencia que nace del miedo. Esparcidas por los vastos bosques de las tierras mayas se encuentran grandes pirámides con su semejanza serpentina, arquitectónicamente perfectas para captar la luz y dar vida a esas deslizantes estatuas de piedra. Pintados en sangre, se hicieron sacrificios en estos sitios para apaciguar a Kukulkan. Él es el señor de la muerte y el renacimiento. Al mundo, trajo los cuatro elementos, pero del viento mantiene el control. Se dice que una gran joya, que lleva alrededor de su cuello sinuoso, es la fuente de todo el aire. Para la gente, trajo el calendario. Ese glorioso y portentoso disco de piedra, que cuenta el tiempo hasta un futuro lejano, solo para detenerse abruptamente y con una finalidad aterradora. Al campo de batalla, trae un legado de poder y dominación. Los sacrificios hechos por su favor se midieron con sangre, pero la sangre mortal es débil. Parece que, para el apaciguamiento final de Kukulkan, se requiere la sangre de un Dios."),
(5,"Scylla","Griego", "Mago", "Scylla.jfif", "Los poemas antiguos advierten de un estrecho canal de agua tan traicionero que la muerte toca a todos los que se acercan. Los marineros deben elegir arriesgar su barco, viajando cerca del monstruoso remolino Caribdis, o abrazar los bancos de rocas donde habita una criatura que, según algunos, está hecha de las pesadillas de todos los hombres. Scylla, la llaman, Horror del mar. Ningún barco que se atreva a navegar en sus aguas sale ileso. Aquellos que se aferran a la supervivencia susurran historias de pánico sobre enormes tentáculos negros con puntas de cabezas de sabueso babeantes que devastan barcos enteros hasta hacer astillas con despiadada precisión. Aunque es su risa, dicen, eso es más horrible como un niño, deleitándose con un asesinato empapado de sangre mientras los hombres son arrastrados al oscuro abismo. Los poetas han tratado de romantizar a esta bestia, de darle algo de humanidad a su monstruosidad. Escriben que una vez fue una hermosa Náyade, agraviada por una sacerdotisa celosa y transformada. Sin embargo, los viejos poemas dicen que nació de esta manera, engendrada por dioses llenos de celos y odio; arrojado al mar para aterrorizar a la humanidad. Ojalá se hubiera quedado en el mar, pero la pesadilla ha llegado a tierra. Arrastrada por tentáculos con cabeza de perro deambula por nuestras calles, nos arranca de nuestras camas y llena la noche de risas inquietantes. Ha venido Scylla y ni siquiera los dioses pueden ayudarnos."),
(6,"Ymir","Nordico", "Guardian", "Ymir.jpg", "Por lo que se sabe, Ymir lleva muerta hace mucho tiempo. En Midgard, en el norte, se cree que el cráneo de Ymir es el cielo, su carne la tierra y su sangre el mar. Sin embargo, estas afirmaciones podrían ser simplemente la jactancia del orgulloso Odin y sus hermanos, quienes se atribuyen el mérito de haber matado al primer jotunn y haber creado la tierra con las partes de su cuerpo. Al comienzo de los tiempos, el Reino del Fuego, Muspell y el Reino del Hielo, Niflheim se reunieron en el lugar llamado Ginnungagap; el vacío del espacio. El vapor se elevó y se congeló de nuevo, y a partir de esa mezcla primordial, tomó forma Ymir, el Rey de los Gigantes de Hielo. De su cuerpo gotearon otros seres que se convertirían en los antepasados ​​de Dioses, Hombres, Enanos y, por supuesto, Gigantes. Incluso el poderoso Odin debe reclamar a Ymir como su abuelo. Sin embargo, Ymir, como todos los gigantes, era una criatura malvada y dirigió a sus hermanos gigantes contra los dioses. Después de siglos de guerra, Odin y sus hermanos mataron al Rey Gigante y forjaron el mundo a partir de sus restos. Sin embargo, hay otros susurros. Rumores de que Ymir, aunque no era un Dios, seguía siendo un Ser Primordial y, como tal, no podía ser destruido realmente. Quizás solo permanece dormido en Niflheim, el reino del hielo, ansioso por regresar y vengarse de Odin en su familia.");

insert into Usuario(id, usuario, contrasenia)
values (1, "Admin", "1234");
select * from Usuario;