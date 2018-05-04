<?php

interface ObserverTwoInterface
{
    public function update(SubjectTwoInterface $subjectTwo);
    public function response();
}

class InsertIntoTableOne implements ObserverTwoInterface
{
    protected $data;

    public function update(SubjectTwoInterface $subjectTwo)
    {
        $this->data = $subjectTwo->data;
    }
    public function response()
    {
        echo $this->data . '在 TableOne insert 成功<br>'; // 表示此class 對subject 更新的資料做的動作
    }
}
class InsertTableTwo implements ObserverTwoInterface
{
    protected $data;

    public function update(SubjectTwoInterface $subjectTwo)
    {
        $this->data = $subjectTwo->data;
    }
    public function response()
    {
        echo $this->data . '在 TableTwo insert 成功<br>';
    }
}
class InsertTableThree implements ObserverTwoInterface
{
    protected $data;

    public function update(SubjectTwoInterface $subjectTwo)
    {
        $this->data = $subjectTwo->data;
    }
    public function response()
    {
        echo $this->data . '在 TableThree insert 成功<br>';
    }
}