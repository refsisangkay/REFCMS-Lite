    <div class="col-sm-10 text-left" style="margin-top: 20px;"> 
        <?php
            if (isset($data)) {
                foreach ($data as $key => $value) {
                     $data[$key] = $data[$value]; // send $data values to page content
                }
            } else {
                $data['data'] = ""; // send blank variable
            } ?>
        <?php $this->load->view($page, $data); // showing page content ?>
    </div>