<?php

namespace shyevsa\rajasms;

/**
* Customeized version of SMS-class for RajaSMS
**/

class smsclass {

    protected $to;
    protected $text;
    public $host;
    public $username;
    public $password;
    public $idreport;
    public $apikey;
    public $modem;
    public $error;

    public function setTo($to) {
        $this->to = $to;
    }

    public function setText($text) {
        $this->text = $text;
    }

    public function smssend() {
        if (!$this->to) {
            trigger_error('Error: Phone to required!');
            exit();
        }

        if (!$this->text) {
            trigger_error('Error: Text Message required!');
            exit();
        }
        $curlHandle = curl_init();
        $url = "http://$this->host/sms/smsmasking.php?username=" . urlencode($this->username) . "&password=" . urlencode($this->password) . "&key=" . $this->apikey . "&number=" . urlencode($this->to) . "&message=" . urlencode($this->text);
        curl_setopt($curlHandle, CURLOPT_URL, $url);
        curl_setopt($curlHandle, CURLOPT_HEADER, 0);
        curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curlHandle, CURLOPT_TIMEOUT, 120);
        $hasil = curl_exec($curlHandle);
        $this->error = curl_error($curlHandle);
        curl_close($curlHandle);
        return $hasil;
    }

    public function smsmaskingreport() {
        $curlHandle = curl_init();
        $url = "http://$this->host/sms/smsmaskingreport.php?id=" . $this->idreport . "&key=" . $this->apikey;
        curl_setopt($curlHandle, CURLOPT_URL, $url);
        curl_setopt($curlHandle, CURLOPT_HEADER, 0);
        curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curlHandle, CURLOPT_TIMEOUT, 120);
        $hasil = curl_exec($curlHandle);
        $this->error = curl_error($curlHandle);
        curl_close($curlHandle);
        return $hasil;
    }

    public function smsregulersend() {
        if (!$this->to) {
            trigger_error('Error: Phone to required!');
            exit();
        }

        if (!$this->text) {
            trigger_error('Error: Text Message required!');
            exit();
        }
        $curlHandle = curl_init();
        $url = "http://$this->host/sms/smsreguler.php?username=" . urlencode($this->username) . "&password=" . urlencode($this->password) . "&key=" . $this->apikey . "&number=" . urlencode($this->to) . "&message=" . urlencode($this->text);
        curl_setopt($curlHandle, CURLOPT_URL, $url);
        curl_setopt($curlHandle, CURLOPT_HEADER, 0);
        curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curlHandle, CURLOPT_TIMEOUT, 120);
        $hasil = curl_exec($curlHandle);
        $this->error = curl_error($curlHandle);
        curl_close($curlHandle);
        return $hasil;
    }

    public function smssaldo() {
        $curlHandle = curl_init();
        $url = "http://$this->host/sms/smssaldo.php?username=" . urlencode($this->username) . "&password=" . urlencode($this->password) . "&key=" . $this->apikey;
        curl_setopt($curlHandle, CURLOPT_URL, $url);
        curl_setopt($curlHandle, CURLOPT_HEADER, 0);
        curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curlHandle, CURLOPT_TIMEOUT, 120);
        $hasil = curl_exec($curlHandle);
        $this->error = curl_error($curlHandle);
        curl_close($curlHandle);
        return $hasil;
    }

    public function smsregulerreport() {
        $curlHandle = curl_init();
        $url = "http://$this->host/sms/smsregulerreport.php?id=" . $this->idreport . "&key=" . $this->apikey;
        curl_setopt($curlHandle, CURLOPT_URL, $url);
        curl_setopt($curlHandle, CURLOPT_HEADER, 0);
        curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curlHandle, CURLOPT_TIMEOUT, 120);
        $hasil = curl_exec($curlHandle);
        $this->error = curl_error($curlHandle);
        curl_close($curlHandle);
        return $hasil;
    }

    public function smsprivatesend() {
        if (!$this->to) {
            trigger_error('Error: Phone to required!');
            exit();
        }

        if (!$this->text) {
            trigger_error('Error: Text Message required!');
            exit();
        }
        $curlHandle = curl_init();
        $url = "http://$this->host/sms/smsprivate.php?username=" . urlencode($this->username) . "&password=" . urlencode($this->password) . "&key=" . $this->apikey . "&modem=" . $this->modem . "&number=" . urlencode($this->to) . "&message=" . urlencode($this->text);
        curl_setopt($curlHandle, CURLOPT_URL, $url);
        curl_setopt($curlHandle, CURLOPT_HEADER, 0);
        curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curlHandle, CURLOPT_TIMEOUT, 120);
        $hasil = curl_exec($curlHandle);
        $this->error = curl_error($curlHandle);
        curl_close($curlHandle);
        return $hasil;
    }

    public function smsprivateaktif() {
        $curlHandle = curl_init();
        $url = "http://$this->host/sms/smsaktifprivate.php?username=" . urlencode($this->username) . "&password=" . urlencode($this->password) . "&key=" . $this->apikey . "&modem=" . $this->modem;
        curl_setopt($curlHandle, CURLOPT_URL, $url);
        curl_setopt($curlHandle, CURLOPT_HEADER, 0);
        curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curlHandle, CURLOPT_TIMEOUT, 120);
        $hasil = curl_exec($curlHandle);
        $this->error = curl_error($curlHandle);
        curl_close($curlHandle);
        return $hasil;
    }

    public function smsprivatepulsa() {
        $curlHandle = curl_init();
        $url = "http://$this->host/sms/smspulsaprivate.php?username=" . urlencode($this->username) . "&password=" . urlencode($this->password) . "&key=" . $this->apikey . "&modem=" . $this->modem;
        curl_setopt($curlHandle, CURLOPT_URL, $url);
        curl_setopt($curlHandle, CURLOPT_HEADER, 0);
        curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curlHandle, CURLOPT_TIMEOUT, 120);
        $hasil = curl_exec($curlHandle);
        $this->error = curl_error($curlHandle);
        curl_close($curlHandle);
        return $hasil;
    }

    public function smsprivatebonus() {
        $curlHandle = curl_init();
        $url = "http://$this->host/sms/smsbonusprivate.php?username=" . urlencode($this->username) . "&password=" . urlencode($this->password) . "&key=" . $this->apikey . "&modem=" . $this->modem;
        curl_setopt($curlHandle, CURLOPT_URL, $url);
        curl_setopt($curlHandle, CURLOPT_HEADER, 0);
        curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curlHandle, CURLOPT_TIMEOUT, 120);
        $hasil = curl_exec($curlHandle);
        $this->error = curl_error($curlHandle);
        curl_close($curlHandle);
        return $hasil;
    }

    public function smsprivatereport() {
        $curlHandle = curl_init();
        $url = "http://$this->host/sms/smsprivatereport.php?id=" . $this->idreport . "&key=" . $this->apikey;
        curl_setopt($curlHandle, CURLOPT_URL, $url);
        curl_setopt($curlHandle, CURLOPT_HEADER, 0);
        curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curlHandle, CURLOPT_TIMEOUT, 120);
        $hasil = curl_exec($curlHandle);
        $this->error = curl_error($curlHandle);
        curl_close($curlHandle);
        return $hasil;
    }

    public function smssendDiafaan() {
        if (!$this->to) {
            trigger_error('Error: Phone to required!');
            exit();
        }

        if (!$this->text) {
            trigger_error('Error: Text Message required!');
            exit();
        }
        $curlHandle = curl_init();
        $url = "http://$this->host/http/send-message?username=" . urlencode($this->username) . "&password=" . urlencode($this->password) . "&to=" . urlencode($this->to) . "&message-type=sms.automatic&message=" . urlencode($this->text). "&gateway=".$this->modem;
        curl_setopt($curlHandle, CURLOPT_URL, $url);
        curl_setopt($curlHandle, CURLOPT_HEADER, 0);
        curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curlHandle, CURLOPT_TIMEOUT, 120);
        $hasil = curl_exec($curlHandle);
        $this->error = curl_error($curlHandle);
        curl_close($curlHandle);
        return $hasil;
    }

    public function smssendreport1() {
        $curlHandle = curl_init();
        $url = "http://$this->host/http/request-status-update?username=" . urlencode($this->username) . "&password=" . urlencode($this->password) . "&message-id=" . $this->idreport;

        curl_setopt($curlHandle, CURLOPT_URL, $url);
        curl_setopt($curlHandle, CURLOPT_HEADER, 0);
        curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curlHandle, CURLOPT_TIMEOUT, 120);
        $hasil = curl_exec($curlHandle);
        $this->error = curl_error($curlHandle);
        curl_close($curlHandle);
        return $hasil;
    }

}
