<?php
require_once('config.php');
//var_dump($_SERVER['REQUEST_URI']);
$par = explode('/',$_SERVER['REQUEST_URI']);
$options = $par[1];
$field = $par[2];
$mouth = $par[3];
$in = $par[4];
$path = $par[5];
$shp = $par[6];

$uid = uniqid();

$dir = '../gis4graph/out/'.$uid;
$dirPy = 'out/'.$uid;

mkdir($dir,'0777',true);

//shell_exec("c.Shp2Graph(path, 'out/'+pid+'/out', pid, options, field, mouth)");
header("Location: ".URL_G4G."/app/#/map/".$uid);

/*
@app.route('/converter/<options>/<field>/<mouth>/<path:path>', methods = ['GET', 'POST'])
def convert_shp2graph(options, field, mouth, path):
    pid = str(uuid.uuid4()).replace('-', '')
    if request.method == 'GET':
        os.makedirs('out/'+pid)
        import converter as c
        c.Shp2Graph(path, 'out/'+pid+'/out', pid, options, field, mouth)
        return redirect("/app/#/map/"+pid, code=302)


*/