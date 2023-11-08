<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use App\Models\rss_table;

// use Illuminate\Support\Facades\DB;


class ApplicationController extends Controller
{

    protected function fetchRSS($url) {


        // link rss italiani
        // https://www.ipse.com/rssit.html

        // google top news
        // https://news.google.com/rss?gl=US&hl=en-US&ceid=US:en

        // bbc; title not present
        // $rss = simplexml_load_file("http://feeds.bbci.co.uk/news/uk/rss.xml");

    error_reporting(0);

    $rss = simplexml_load_file($url);
    if($rss == null)
        throw new \Exception ("Invalid url, please insert a valid one");

        // Artisan::call('migrate:fresh');
        \DB::select("delete from rss_table");

        foreach($rss->channel->item as $item){     
            
            try{
                $my_table = new rss_table();
                
                $my_table->title = $item->title;
                $my_table->link = $item->link;
                $my_table->pubDate = $item->pubDate;
    
                $my_table->save();            
            }
            catch(\Exception $e){ echo die("Error msg: " . $e->getMessage()); }
        }
    }

    protected function getDataFromMySQL() {

        $recordSet = rss_table::all();
        $recordSetData = $recordSet->toArray();

        return $recordSetData;
    }

    //
    public function index() {

        try{
            $this->fetchRSS("https://news.google.com/rss?gl=US&hl=en-US&ceid=US:en");
            // $this->fetchRSS("https://www.affaritaliani.it/static/rss/sezioniDIN.aspx?idchannel=82");
        }
        catch(\Exception $e){ echo die("Error msg: " . $e->getMessage()); }
        
        $arrayRecordSetDataRss = $this->getDataFromMySQL();
        return view("appUI.index")->with("mySqlRecordSet", $arrayRecordSetDataRss);
    }
}
