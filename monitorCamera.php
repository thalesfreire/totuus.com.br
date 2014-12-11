<?php include("aplicacao/admin/header.php") ?>
		
	<!-- CORPO -->
	<div class="Content" style="margin-left: 5px;">
	   
		<div id="bodyContainer">
			<h2>Monitor de Câmeras</h2>
			
			<?php 
			
				//echo exec('ping -n 1-w 1 www.google.com.br');
				
				function pingDomain($domain, $port) {
					$starttime = microtime(true);
					$file      = fsockopen ($domain, $port, $errno, $errstr, 10);
					$stoptime  = microtime(true);
					$status    = 0;
				
					if (!$file) $status = -1;  // Site is down
					else {
						fclose($file);
						$status = ($stoptime - $starttime) * 1000;
						$status = floor($status);
					}
					return $domain .":". $port . " " . ($status != -1 ? "Câmera funcionando" : "Câmera não funcionando") . "<br>";
				}
			
				try{
					//echo pingDomain('sayso.dlinkddns.com','7070');
					//echo pingDomain('sayso.dlinkddns.com','7071');
					//echo pingDomain('sayso.dlinkddns.com','7072');
					//echo pingDomain('sayso.dlinkddns.com','7073');
					echo pingDomain('burguertown.dlinkddns.com','7070');
				}
				catch(Exception $e) {
				}
			
			?>
			
			
			
		</div>
		
	</div>
	
	<br class="Clear" />
        
<?php include("aplicacao/admin/footer.php") ?>
		
	