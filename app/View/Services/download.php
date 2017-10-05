<?php
 $line = $services[0]['Service'];
 $this->Csv->addRow(array_keys($line));
  foreach ($services as $service)
  {
     $line = $service['Service']; 
     $this->Csv->addRow($line);
  }

  $filename = 'services';
  echo  $this->Csv->render($filename);
?>