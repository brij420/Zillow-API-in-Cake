<?php

class ZillowController extends AppController {

    var $uses = null;
    var $zws_id = 'X1-ZWz1dnwwweau4r_9tzan';
    var $zpid = '';
    var $regionId = '';

    public function __construct($request = null, $response = null) {
        parent::__construct($request, $response);
        $this->layout = false;
    }

//&state=WA&city=Seattle&neighborhood=Ballard
    public function GetDemographics() {
        $query_string = NULL;
        $data = NULL;

        //if (!empty($this->params['data'])) {
        foreach ($this->params['data'] as $key => $value) {
            if ($value)
                $query_string.='&' . $key . '=' . urlencode($value);
        }

        $url = "http://www.zillow.com/webservice/GetDemographics.htm?zws-id=" . $this->zws_id . $query_string;
        $data = simplexml_load_string(file_get_contents($url));
        $data = json_decode(json_encode($data), 1);

        $this->set('data', $data);
    }

//$zip=48749425
    public function GetZestimate() {
        $query_string = NULL;
        $data = NULL;

        //if (!empty($this->params['data'])) {
        foreach ($this->params['data'] as $key => $value) {
            if ($value)
                $query_string.='&' . $key . '=' . urlencode($value);
        }
        $url = "http://www.zillow.com/webservice/GetZestimate.htm?zws-id=" . $this->zws_id . $query_string;
        $data = simplexml_load_string(file_get_contents($url));
        $data = json_decode(json_encode($data), 1);
        $this->set('data', $data);
    }

//address=2114 Bigelow Ave&citystatezip=Seattle, WA
    public function GetSearchResults() {
        $query_string = NULL;
        $data = NULL;
        foreach ($this->params['data'] as $key => $value) {
            if ($value)
                $query_string.='&' . $key . '=' . urlencode($value);
        }
        $url = "http://www.zillow.com/webservice/GetSearchResults.htm?zws-id=" . $this->zws_id . $query_string;
        $data = simplexml_load_string(file_get_contents($url));
        $data = json_decode(json_encode($data), 1);
        $this->set('data', $data);
    }

    public function GetChart() {
        $query_string = NULL;
        $data = NULL;
        foreach ($this->params['data'] as $key => $value) {
            if ($value)
                $query_string.='&' . $key . '=' . urlencode($value);
        }
        $url = "http://www.zillow.com/webservice/GetChart.htm?zws-id=" . $this->zws_id . $query_string;
        $data = simplexml_load_string(file_get_contents($url));
        $data = json_decode(json_encode($data), 1);
        $this->set('data', $data);
    }

    public function GetComps() {
        $query_string = NULL;
        $data = NULL;
        foreach ($this->params['data'] as $key => $value) {
            if ($value)
                $query_string.='&' . $key . '=' . urlencode($value);
        }
        $url = "http://www.zillow.com/webservice/GetComps.htm?zws-id=" . $this->zws_id . $query_string;
        $data = simplexml_load_string(file_get_contents($url));
        $data = json_decode(json_encode($data), 1);
        $this->set('data', $data);
    }

    public function GetDeepSearchResults() {
        $query_string = NULL;
        $data = NULL;
        foreach ($this->params['data'] as $key => $value) {
            if ($value)
                $query_string.='&' . $key . '=' . urlencode($value);
        }
        $url = "http://www.zillow.com/webservice/GetDeepSearchResults.htm?zws-id=" . $this->zws_id . $query_string;
        $data = simplexml_load_string(file_get_contents($url));
        $data = json_decode(json_encode($data), 1);
        $this->set('data', $data);
    }

    public function GetDeepComps() {
        $query_string = NULL;
        $data = NULL;
        foreach ($this->params['data'] as $key => $value) {
            if ($value)
                $query_string.='&' . $key . '=' . urlencode($value);
        }
        $url = "http://www.zillow.com/webservice/GetDeepComps.htm?zws-id=" . $this->zws_id . $query_string;
        $data = simplexml_load_string(file_get_contents($url));
        $data = json_decode(json_encode($data), 1);
        $this->set('data', $data);
    }

    public function GetUpdatedPropertyDetails() {
        $query_string = NULL;
        $data = NULL;
        foreach ($this->params['data'] as $key => $value) {
            if ($value)
                $query_string.='&' . $key . '=' . urlencode($value);
        }
        $url = "http://www.zillow.com/webservice/GetUpdatedPropertyDetails.htm?zws-id=" . $this->zws_id . $query_string;
        $data = simplexml_load_string(file_get_contents($url));
        $data = json_decode(json_encode($data), 1);
        $this->set('data', $data);
    }

    public function GetRegionChildren() {
        $query_string = NULL;
        $data = NULL;
        foreach ($this->params['data'] as $key => $value) {
            if ($value)
                $query_string.='&' . $key . '=' . urlencode($value);
        }
        $url = "http://www.zillow.com/webservice/GetUpdatedPropertyDetails.htm?zws-id=" . $this->zws_id . $query_string;
        $data = simplexml_load_string(file_get_contents($url));
        $data = json_decode(json_encode($data), 1);
        $this->set('data', $data);
    }

    public function GetRegionChart() {
        $query_string = NULL;
        $data = NULL;
        foreach ($this->params['data'] as $key => $value) {
            if ($value)
                $query_string.='&' . $key . '=' . urlencode($value);
        }
        $url = "http://www.zillow.com/webservice/GetUpdatedPropertyDetails.htm?zws-id=" . $this->zws_id . $query_string;
        $data = simplexml_load_string(file_get_contents($url));
        $data = json_decode(json_encode($data), 1);
        $this->set('data', $data);
    }

    public function GetRateSummary() {
        $query_string = NULL;
        $data = NULL;
        foreach ($this->params['data'] as $key => $value) {
            if ($value)
                $query_string.='&' . $key . '=' . urlencode($value);
        }
        $url = "http://www.zillow.com/webservice/GetRateSummary.htm?zws-id=" . $this->zws_id . $query_string;
        $data = simplexml_load_string(file_get_contents($url));
        $data = json_decode(json_encode($data), 1);
        $this->set('data', $data);
    }

  
}

?>