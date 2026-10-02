<?php
$root=dirname(__DIR__);$m=json_decode(file_get_contents($root.'/BUILD-MANIFEST.json'),true);$bad=[];foreach($m['files']??[] as $r){$p=$root.'/'.$r['file'];if(!is_file($p)||hash_file('sha256',$p)!==$r['sha256']||filesize($p)!==$r['bytes'])$bad[]=$r['file'];}if($bad){fwrite(STDERR,'Mismatch: '.implode(', ',$bad));exit(1);}echo "Manifest: PASS
";