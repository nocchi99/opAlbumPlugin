<?php

/**
 * This file is part of the OpenPNE package.
 * (c) OpenPNE Project (http://www.openpne.jp/)
 *
 * For the full copyright and license information, please view the LICENSE
 * file and the NOTICE file that were distributed with this source code.
 */

/**
 * album actions.
 *
 * @package    OpenPNE
 * @subpackage album
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 9301 2008-05-27 01:08:46Z dwhittle $
 */
class albumActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfWebRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->forward('default', 'module');
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new AlbumForm();
  }
  public function executeAlbumCreate(sfWebRequest $request)
  {
    $param = $request->getParameter('album');
    $param['member_id'] = $this->getUser()->getMember()->getId();

    $AlbumForm = new AlbumForm();
    $AlbumForm->bind($param);
    if ($AlbumForm->isValid())
    {
var_dump(__LINE__);
      $AlbumForm->save();
    }
    var_dump(__LINE__);
exit;
  }
}