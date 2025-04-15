create database projeto_receitas;
use projeto_receitas;

create table receitas(
	id int auto_increment primary key,
    titulo varchar(250),
    descricao text,
    receita_texto text,
    autor varchar(250),
    tipo varchar(250)
);

insert into receitas(titulo, descricao, receita_texto, autor, tipo) values (
  'Macarrão à Bolonhesa',
  'Clássico prato italiano com molho de carne moída e tomate.',
  '1. Cozinhe o macarrão até ficar al dente. 
   2. Em uma panela, refogue alho e cebola, adicione a carne moída e deixe dourar. 
   3. Acrescente o molho de tomate, sal, pimenta e orégano. 
   4. Deixe cozinhar por 15 minutos. 
   5. Sirva o molho sobre o macarrão.',
  'Carlos da Cozinha',
  'Almoço'
);

insert into receitas (titulo, descricao, receita_texto, autor, tipo)
values (
  'Salada Grega',
  'Salada refrescante com vegetais frescos e queijo feta.',
  '1. Corte tomate, pepino, cebola roxa e pimentão em cubos. 
   2. Adicione azeitonas pretas e queijo feta em pedaços. 
   3. Tempere com azeite, limão, orégano e sal. 
   4. Misture tudo delicadamente e sirva fria.',
  'Maria Fit',
  'Saudável'
);

insert into receitas(titulo, descricao, receita_texto, autor, tipo) values (
  'Cupcake de Chocolate',
  'Bolinho doce e macio, perfeito para sobremesas ou festas.',
  '1. Misture os ingredientes secos: farinha, cacau, açúcar e fermento. 
   2. Acrescente ovos, leite e manteiga derretida. 
   3. Coloque a massa em forminhas de cupcake. 
   4. Asse em forno pré-aquecido a 180°C por 20 minutos.',
  'Doce Vida',
  'Sobremesa'
);

insert into receitas(titulo, descricao, receita_texto, autor, tipo) values (
  'Frango ao Curry',
  'Frango suculento cozido em molho de curry com leite de coco.',
  '1. Refogue cebola, alho e gengibre em uma panela. 
   2. Adicione cubos de frango e doure bem. 
   3. Acrescente curry em pó, sal e pimenta. 
   4. Adicione leite de coco e cozinhe por 20 minutos. 
   5. Sirva com arroz branco.',
  'Chef Rodrigo',
  'Jantar'
);

insert into receitas(titulo, descricao, receita_texto, autor, tipo) values (
  'Panqueca Americana',
  'Panquecas fofinhas ideais para um café da manhã reforçado.',
  '1. Misture farinha, açúcar, fermento, leite, ovo e manteiga derretida. 
   2. Aqueça uma frigideira untada e despeje porções da massa. 
   3. Vire quando surgirem bolhas na superfície. 
   4. Sirva com mel, frutas ou calda de chocolate.',
  'Lar Doce Lar',
  'Café da Manhã'
);

select * from receitas;