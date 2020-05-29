<?php
define('DB', "C:\\xampp\\htdocs\\Mastering-PHP\\crud\\data\\db.txt");
function seed($fileName) {
    $data = [
        [
            "id"         => 1,
            "name"       => "Rabiul Hasan",
            "profession" => "Jr.Web Developer",
            "age"        => "12",
        ],
        [
            "id"         => 2,
            "name"       => "Kawsar Akter",
            "profession" => "House Wife",
            "age"        => "23",
        ],
        [
            "id"         => 3,
            "name"       => "Nasir Uddin",
            "profession" => "Businessman",
            "age"        => "30",
        ],
        [
            "id"         => 4,
            "name"       => "Motaleb Hossain",
            "profession" => "Shop Kepper",
            "age"        => "25",
        ],
        [
            "id"         => 5,
            "name"       => "Shuvo Ahmed",
            "profession" => "Teacher",
            "age"        => "22",
        ],
        [
            "id"         => 6,
            "name"       => "Nizam Uddin",
            "profession" => "Network Enginner",
            "age"        => "21",
        ],
        [
            "id"         => 7,
            "name"       => "Bublul Ahmed",
            "profession" => "Graphics Designer",
            "age"        => "23",
        ],
    ];

    $serialized  = serialize($data);
    $dataSeeding = file_put_contents($fileName, $serialized, LOCK_EX);
    if ($dataSeeding) {
        return true;
    } else {
        return false;
    }

}

// Generate Report
function generateReport($fileName) {
    $data       = file_get_contents($fileName);
    $allFriends = unserialize($data);
    $sl         = 1;
    foreach ($allFriends as $singleFriend) {
        echo " <tr>
                    <td>{$sl}</td>
                    <td>{$singleFriend['name']}</td>
                    <td>{$singleFriend['profession']}</td>
                    <td>{$singleFriend['age']}</td>
                    <td>
                        <a href=index.php?task=edit&id={$singleFriend['id']}>Edit</a> || <a href=index.php?task=delete&id={$singleFriend['id']}>Delete</a>
                    </td>
                </tr> ";
        $sl++;
    }
}

// add data
function addFriend($fileName, $name, $profession, $age) {
    $found           = false;
    $data            = file_get_contents($fileName);
    $allFriends      = unserialize($data);
    $totalDataInFile = count($allFriends);

    foreach ($allFriends as $singleFriend) {
        if ($singleFriend['age'] == $age) {
            $found = true;
            break;
        }
    }

    if (!$found) {
        $friend = [
            "id"         => newId($allFriends),
            "name"       => $name,
            "profession" => $profession,
            "age"        => $age,
        ];

        array_push($allFriends, $friend);

        $serialized = serialize($allFriends);
        $dataAdded  = file_put_contents($fileName, $serialized, LOCK_EX);
        return true;
    } else {
        return false;
    }

}

// get friends info
function getFriendsInfo($fileName, $id) {
    $fileData     = file_get_contents($fileName);
    $unserialized = unserialize($fileData);
    $offsetId     = '';
    foreach ($unserialized as $offset => $value) {
        if ($value['id'] == $id) {
            $offsetId = $offset;
            break;
        }
    }

    return $unserialized[$offsetId];
}

// update data
function updateFriend($fileName, $id, $name, $profession, $age) {
    $found      = false;
    $fileData   = file_get_contents($fileName);
    $allFriends = unserialize($fileData);

    $offsetId = '';
    foreach ($allFriends as $offset => $value) {
        if ($value['id'] == $id) {
            $offsetId = $offset;
            break;
        }
    }

    foreach ($allFriends as $singleFriend) {
        if ($singleFriend['age'] == $age && $singleFriend['id'] != $id) {
            $found = true;
            break;
        }
    }
    if (!$found) {
        $allFriends[$offsetId]['name']       = $name;
        $allFriends[$offsetId]['profession'] = $profession;
        $allFriends[$offsetId]['age']        = $age;

        $serialized = serialize($allFriends);
        file_put_contents($fileName, $serialized, LOCK_EX);
        return true;
    } else {
        return false;
    }

}

// new id
function newId($allData) {
    $max = max(array_column($allData, 'id'));
    return $max + 1;
}



// delete data
function deleteFriend($fileName, $id) {
    $data       = file_get_contents($fileName);
    $allFriends = unserialize($data);
    $index      = '';
    foreach ($allFriends as $index => $value) {
        if ($value['id'] == $id) {
            $index = $index;
            break;
        }
    }

    unset($allFriends[$index]);

    $serialized = serialize($allFriends);
    file_put_contents($fileName, $serialized, LOCK_EX);
    return true;

}