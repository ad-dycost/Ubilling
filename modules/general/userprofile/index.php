<?php
if(cfr('USERPROFILE')) {
 if (isset ($_GET['username'])) {
        $login=vf($_GET['username']);
        try {
        $profile=new UserProfile($login);
        show_window(__('User profile'),$profile->render());
        } catch (Exception $exception) {
            show_window(__('Error'),__('Strange exeption').': '. wf_tag('pre').$exception->getMessage().wf_tag('pre',true));
        }
        
     
      } else {
          throw new Exception ('GET_NO_USERNAME');
      }

}
?>
