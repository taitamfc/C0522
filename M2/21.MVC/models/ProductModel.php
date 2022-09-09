<?php
class ProductModel extends Model {

    //lay tat ca
    public function getAll(){
        $sql = "SELECT * FROM c10_mat_hang";
        // fetchAll
        $stmt = $this->conn->query($sql);

        //Thiết lập kiểu dữ liệu trả về
        $stmt->setFetchMode(PDO::FETCH_OBJ);//array => object

        //fetchALL se tra ve du lieu nhieu hon 1 ket qua
        $rows = $stmt->fetchAll();

        return $rows;
    }

    //lay chi tiet
    public function find($id){
        $sql = "SELECT * FROM products WHERE id = ".$id;
        // fetch
    }

    //them
    public function save($data){
        $TENHANG = $data['TENHANG'];
        $MACONGTY = $data['MACONGTY'];

        $MALOAIHANG = 1;
        $SOLUONG    = 100;
        $DONVITINH  = 'chiec';
        $GIAHANG    = 10000;

        $sql = "INSERT INTO `c10_mat_hang` 
                (`TENHANG`, `MACONGTY`, `MALOAIHANG`, `SOLUONG`, `DONVITINH`, `GIAHANG`) 
                VALUES 
                ('$TENHANG', $MACONGTY, $MALOAIHANG, $SOLUONG, '$DONVITINH', $GIAHANG)";

        // exec
        $this->conn->exec($sql);
    }

    //sua
    public function update($id,$data){
        // exec
    }

    //xoa
    public function destroy($id){
        // exec
    }
}