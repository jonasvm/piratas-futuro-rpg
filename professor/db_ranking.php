<?php
include "valida_secao.inc";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

    <head>
        <title>Piratas do Futuro</title>
        <meta name="description" content="website description" />
        <meta name="keywords" content="website keywords, website keywords" />
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <link rel="stylesheet" type="text/css" href="style/style.css" />
    <link rel="shortcut icon" href="./aluno/images/favicon.ico" /> </head>

    <body>
        <div id="main">
			<div id="header">
				<div id="top_menu">
                	<ul>
						<li class="top_help"><a href="help.php"></a></li>
						<li class="top_credits"><a href="about.php"></a></li>
                        <li class="top_space"></li>
						<li class="top_logout"><a href="logout.php"></a></li>
					</ul>
                </div>
				<div id="user_content">
                    <div id="sup1"></div>
                    <div id="sup2"></div>
                    <div id="sup3"></div>
                    <div id="sup4"></div>
				</div>
				<div id="menubar">
                	<div id="bar_side1"></div>
                    <ul class="menuBar">
						<li class="bar_main"><a href="index.php"><font size="5" color="white">Principal</font></a></li>
						<li class="bar_classes"><a href="classroom.php"><font size="5" color="white">Classes</font></a></li>
						<li class="bar_students"><a href="missions.php"><font size="5" color="white">Missões</font></a></li>
                        			<li class="bar_challenges"><a href="challenges.php"><font size="5" color="white">Desafios</font></a></li>
						<li class="bar_ranking"><a href="db_ranking.php"><font size="5" color="white">Ranking</font></a></li>
						<li class="bar_messages"><a href="messages.php"><font size="5" color="white">Mensagens</font></a></li>
						
					</ul>
                    <div id="bar_side4"></div>
                </div>
			</div>
            <div id="site_content">
            	<div id="space1"></div>
            	<div id="space2"></div>
				<div id="left_content"></div>
                <div id="content">
                	<div id="text">
                    <?php
                    include "conecta_mysql.inc";
                    $html = '';
                    $html .= '<table border="0" width="600" class="tab_general" >';
                    $html .= '<tr>';
                    $html .= '<h2>Ranking</h2></td></tr>';
                    $html .= '<tr><td align="center"><b>Nome do jogador</b></td>';
                    $html .= '<td align="center"><b>Nome do personagem</b></td>';
                    $html .= '<td align="center"><b>XP</b></td></tr>';
                    $sql = mysqli_query($con, "SELECT u.name as name, c.name as cname, c.xp as xp FROM characterr as c, user as u WHERE u.id = c.user_id AND u.type = 3 ORDER BY c.xp DESC") or die(mysqli_error($con));
                    while ($row = mysqli_fetch_assoc($sql)) {
                        $html .= '<tr><td>' . $row['name'] . '</td><td>' . $row['cname'] . '</td><td>' . $row['xp'] . '</td></tr>';
                    }
                    $html .= '</table>';
                    echo $html;
                    ?>
                </div>
                </div>
                <div id="right_content"></div>
            </div>
            <div id="footer">
				<div id="footer_1"></div>
				<div id="footer_2">TODOS OS DIREITOS RESERVADOS</div>
				<div id="footer_3"></div>
			</div>
        </div>
    </body>
</html>
