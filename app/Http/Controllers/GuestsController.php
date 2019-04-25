<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

class GuestsController extends Controller
{
    protected $db;
    protected $db_name = 'admin_panel/guests';

    function __construct()
    {
        $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/adminpanel-89703-firebase-adminsdk-a1qfh-777e26353f.json');
        $firebase = (new Factory)
            ->withServiceAccount($serviceAccount)
            ->create();

        $this->db = $firebase->getDatabase();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $results = $this->db->getReference($this->db_name)->getValue();

        $results= collect($results)->groupBy('table_id'); //TODO IF NEED CAN CHANGE TO GROUP

        return response()->json([
            'data' => $results
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $results = $this->db->getReference($this->db_name)->getValue();

        foreach ($results as $key=>$item)
        {
            if ($item['user_id'] == $request->get('user_id')) {
                $table_id = $request->get('table_id');

                if ($table_id) {
                    $freeChairs = $this->checkTableAvailable($table_id);
                    if ($freeChairs > 9) {
                        return response()->json([
                            'error' => true,
                            'message' => "Table $table_id is full!"
                        ],400);
                    }
                }


                $this->db->getReference('admin_panel/guests/'.$key)->update([
                    'table_id'=>$table_id,
                ]);
            }
        }
        $results = $this->db->getReference($this->db_name)->getValue();
        $results= collect($results)->groupBy('table_id'); //TODO IF NEED CAN CHANGE TO GROUP
        return response()->json([
            'error' => false,
            'message' => $table_id ? "Table $table_id updated successfully!" : "Guest removed from table!",
            'data' => $results
        ],200);
    }

    private function checkTableAvailable($table_id)
    {
        $results = $this->db->getReference($this->db_name)->getValue();

        $count = 0;
        foreach ($results as $item)
        {
            if ($item['table_id'] == $table_id) {
                $count++;
            }
        }

        return $count;
    }

    //TODO REMOVE
    public function fire()
    {
        $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/adminpanel-89703-firebase-adminsdk-a1qfh-777e26353f.json');
        $firebase = (new Factory)
            ->withServiceAccount($serviceAccount)
            ->create();

        $db = $firebase->getDatabase();
        $a = $db->getReference('admin_panel/guests/');

        $a->push([
            'id'=>1,
            'user_id'=>1,
            'table_id'=>0,
            'name'=>'save',
            'category'=>'1',
            'attended' => true
        ]);

        dd($a->getValue());
    }
}
