<html>
   <head><title>{titulo}</title></head>
<body>
   <?php
      function getTemplate( $template, $pasta = "templates/" ) {
        $arqTemp = $folder.$template; // criando var com caminho do arquivo
	if ( is_file( $arqTemp ) ) { // verificando se o arq existe
		return file_get_contents( $arqTemp ); // retornando conteúdo do arquivo
	} else
		return FALSE;
        }

function parseTemplate( $template, $array ) {
	foreach ($array as $a => $b) { // recebemos um array com as tags
		$template = str_replace( '{'.$a.'}', $b, $template );
	}
	return $template; // retorno o html com conteúdo final
}

$arrTags = array(
	'titulo'=>'Dicas de PHP',
	'artigo_titulo'=>'Templates em PHP - Dicas de PHP',
	'artigo_conteudo'=>'Demonstração de como criar um sistema simples de templates com PHP',
	'rodape'=>'© Dicas de PHP - Todos direitos reservados 2012 '
);

$template = getTemplate( 'templates/dicas.html' );

$templateFinal = parseTemplate( $template, $arrTags );

echo $templateFinal;
   <section>
		<article>
			<header>
				<h1>{artigo_titulo}</h1>
			</header>
			<div>{artigo_conteudo}</div>
		</article>
	</section>
	<footer>{rodape}</footer>
	?>
</body>
</html>
