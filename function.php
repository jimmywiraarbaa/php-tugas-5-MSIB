<?php
class mahasiswa
{
    public $nim;
    public $name;
    public $university;
    public $subject;
    public $nilai;

    public function __construct($nim, $name, $university, $subject, $nilai)
    {
        $this->nim = $nim;
        $this->name = $name;
        $this->university = $university;
        $this->subject = $subject;
        $this->nilai = $nilai;
    }

    public function nilGrade()
    {
        if ($this->nilai >= 85) {
            return 'A';
        } elseif ($this->nilai >= 76) {
            return 'B';
        } elseif ($this->nilai >= 60) {
            return 'C';
        } elseif ($this->nilai >= 30) {
            return 'D';
        } else {
            return 'E';
        }
    }

    public function nilPredikat($grade)
    {

        switch ($grade) {
            case 'A':
                return 'Sangat Memuaskan';

            case 'B':
                return 'Memuaskan';

            case 'C':
                return 'Cukup';

            case 'D':
                return 'Kurang';

            case 'E':
                return 'Sangat Kurang';

            default:
                return '-';
        }
    }

    public function nilStatus()
    {
        return ($this->nilai >= 60) ? 'Lulus' : 'Tidak Lulus';
    }
}
