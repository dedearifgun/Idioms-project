<?php
namespace App\Controllers;

class Idioms extends BaseController
{
    private $file;

    public function __construct()
    {
        $this->file = ROOTPATH . 'app/Data/idioms.json';
    }

    private function loadData()
    {
        return json_decode(file_get_contents($this->file), true);
    }

    private function saveData($data)
    {
        file_put_contents($this->file, json_encode($data, JSON_PRETTY_PRINT));
    }

    public function index()
    {
        $data['idioms'] = $this->loadData();
        return view('idioms/index', $data);
    }

    public function detail($id)
    {
        $idioms = $this->loadData();
        $data['idiom'] = null;
        foreach ($idioms as $item) {
            if ($item['id'] == $id) {
                $data['idiom'] = $item;
                break;
            }
        }
        return view('idioms/detail', $data);
    }

    public function create()
    {
        return view('idioms/create');
    }

    public function store()
    {
        $idioms = $this->loadData();
        $newId = count($idioms) ? max(array_column($idioms, 'id')) + 1 : 1;

        $idioms[] = [
            'id' => $newId,
            'idiom' => $this->request->getPost('idiom'),
            'meaning' => $this->request->getPost('meaning'),
            'example' => $this->request->getPost('example')
        ];

        $this->saveData($idioms);
        return redirect()->to('/idioms');
    }

    public function edit($id)
    {
        $idioms = $this->loadData();
        $data['idiom'] = null;
        foreach ($idioms as $item) {
            if ($item['id'] == $id) {
                $data['idiom'] = $item;
                break;
            }
        }
        return view('idioms/edit', $data);
    }

    public function update($id)
    {
        $idioms = $this->loadData();
        foreach ($idioms as &$item) {
            if ($item['id'] == $id) {
                $item['idiom'] = $this->request->getPost('idiom');
                $item['meaning'] = $this->request->getPost('meaning');
                $item['example'] = $this->request->getPost('example');
                break;
            }
        }
        $this->saveData($idioms);
        return redirect()->to('/idioms');
    }

    public function delete($id)
    {
        $idioms = $this->loadData();
        $idioms = array_filter($idioms, fn($i) => $i['id'] != $id);
        $this->saveData(array_values($idioms));
        return redirect()->to('/idioms');
    }
}
