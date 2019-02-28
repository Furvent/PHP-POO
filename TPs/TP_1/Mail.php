<?php

class Mail {
    #region CONST
    const MAX_QUEUE = 10;
    #endregion
    #region PROPERTIES
    private $sender;

    /**
     * @return mixed
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * @param mixed $sender
     */
    public function setSender($sender)
    {
        $this->sender = $sender;
    }

    private $receiver;

    /**
     * @return mixed
     */
    public function getReceiver()
    {
        return $this->receiver;
    }

    /**
     * @param mixed $receiver
     */
    public function setReceiver($receiver)
    {
        $this->receiver = $receiver;
    }

    #region METHODS
    public function __construct($sender, $receiver){
        $this->setSender($sender);
        $this->setReceiver($receiver);
    }

    public function send() {
        $okMess = "ok";
        $notOkMess = "nok";
        if ($this->checkMail($this->sender) && $this->checkMail($this->receiver)) {
            return $okMess;
        } else {
            return $notOkMess;
        }
    }

    private function checkMail($email) {
        return true;
    }
    #endregion
    #endregion
}