<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 9/18/2019
 * Time: 8:34 PM
 */
if(!empty($_POST)){
    setcookie('cSamsung','SamSung',time()+10,'/');
    setcookie('c2.800.000','2.800.000',time()+10,'/');
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Product Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container" style="margin-top: 30px">
    <form action="#" method="post">
        <div class="row">
            <div class="col-md-3">
                <img src="data:image/webp;base64,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"
                     width="100%" alt="">
                <p class="title">SamSung</p>
                <p class="price">2.800.000</p>
                <button>Dat Mua</button>
            </div>
            <div class="col-md-3">
                <img src="data:image/webp;base64,UklGRnoQAABXRUJQVlA4IG4QAAAwQACdASqfAJ8APlEkj0UjoiEV6b1UOAUEsQBo+FzqJ+h822w/5T8V8jqWvu15ZvmV/svWB+jvRU87T1y+bH9w/Vy9IH+e9QD+sf7z1pvWD9BHy4/Z6/cX9t/afzmvrz71/MGCnaV2Y/7zv12H99wGRyPpRLLl9S9gD9Cf6j2me+L+9/8L2DP14/6fYf/br2QP1mZ5Urwfn64/DaerSXNXH69L4St3Z7gAkiunQhn/QmHd/1QXmXSfkNbU9dsslOoAeSrYh66BuzXhA/1WouKEmrFdQhf3EqfTraKE9hbBjb0t9yw2vnGhmhBdjrW+Ip1/nT8WGVQnM5q+82w4ZEHASWSFIqToV+g/GRtj5fvO8HQczvrNzNsWYGlz5vbfzuAJMBmjrxLpPEW1bvL+AWBWYyT5KNobPLrgJlIQ4CovE5nwHfZZtZPNYgixWo/lzfWIAfuaNGl2t1PTmV/6VQTs3thOV5u46lt4JNlJ816nLrzm5aR/KIigDEiC/AxmwBlOFrnwRNky7FwKSW4Tyvb7Wdgb1T+7XC+kEGsq/yXKUg96AQkpQxSEg83B5r6WVOhEZg4acRf3/KZiDV82tGXsCivOHfhmvszNCVnWj6zpdJGskouCVlAuNlFhmfnpOtaRsE7FsMEZFP4Y5ofIZ0RT1QOfQNXBr7TjdrYd+XQTDdrH2kkTW5IYAgAA/v60NTysXiw0t8upk/5t+w+/LAu6GSDln7RkRYqQtP+4t30TkBj9ABLIt8dc8j/9FtN4F/59A3NipfjC6xPzp/4kLXZjztI0f0MeVq2xp1kk2TOsFQLON7cErnuOy7210a2GePsmDL25yg3sEDHuJDJeccm+2ZBdF7ZMnq0Fre39WnbJWkoQ7uFjGPzep5P4yZ+ao/2Y/nXo3cJ1b5XEE8r+SkMQL5FpGicSPhH6BxnsAf/uIzb7adyA5i/4RDAFHvphrGxkqEl46npgOwOL0NYZCDPdYWMF+NvBk9aGYwyq2ED0CD3extV7va73RslDfZpx8bCrNiVl0Nhfln2wOSN+E3LKDyBXhq/mMf+vFKe7X0wHNvcme9um6PgnmgzJJyvrkVkmyix+t5JNNAVOjslEauUhbirHH6eAfR7U5f3cIj+zYB/4yxgz48tCuhQmrtHQA6nmW8XF2SjVEzH83mlnYi2Pco/R8DuzZL/4nlfN8XjP6Lf65F6N2PqR7susa16GBR9v/sHbhNQ5NxR/i19lYtYrQi4YqEVhtrX/DYZwChQjPiqYoXVpwszeWV8uxLR7iEzrgy1mkvwr/UDmrUWImBwowL5TC3z3JcnnBKiWLtahhPXOoZGI0LVy+OeAosiwrI30gLXz8tQmsLEzZNw1ZvO0OJm5VNhx66EZBP04/zbGdCKA/jX+Q5NRMu7bWsNBpt++s/vI4NU/3+jx0y1mjq1wJDHsfD+R76OAHNyZ6OsM9q/JLBsqvwVuNMe+RPFX9mMedBScywf6E8xndRvMWeDc8vFwfhtFYizcm/VUdSD78N62mB+U/1yX8zP+i0jT/LmGrSRZXyZH/Z8Hv2ya6PhBxoouZdKMHhf4Wvnd+6oF/DX4bp2v9q/60lkn+ZM7j2TLzH+TooXylVohz2RmRWnBQCLq6FXgctvR4GFJycRVvKO4cFN8vZMpLR+WqtEh+8Om/xFL3hnx8bs02P6vjSgNBXxDu7li60SXyugz8frMq9QgiKdTYHLJVhF/o2btCRTeafgJkoDBnjV7XGBPFE3eCAVB6+VKFnwnPut1930kK49S//1H6oJdlH3BAvFy67nEZRDged02O66dsE07ztLN3W25OSi+yuA2ZD/leIh4uFPvp6C3fb2KAJOZgmtg6oWlfauzIDKMPk8tp9FXNJOr4IbvJsNKIih4o/g936BmkkRfn/kLUlJrWOgsik1ts1oJ8yaJg8DnqliJc4s083gIK0Fes/PlNyqMUGcBukngc+VxwAHAZMw1J0tv6lv+2qcvKOKXB99LTdoiKtx7zTkHZUyCm4M+hczai0Fwnku4V8omt8lo+pK9UbiBxkkQLE/iqv0kA2XNW6wVBAS2LwaH354ergj2qPPJcxSFnjJnlvhQHiS1XsP9OLSc3NqYfE/HyYfviZtXI+jYmOm+Udvqa392R3/pBQDi8Hr39tEXhJWYyNrstAjYy16oVp+X9VKpHiYq0avMUi9qtSI58SJ3WxakmqpEDMqrAipQHsk37b0QLTOT1t9r47wQX9Xl6CGzy9t+cow5RJl2xvEbdbuhbKSOBDUZoNqr2brr/KOHlpyletW8qpY1OKoxPXWyTs2bwnpMgZIt/C9Z3HvX02525d0cZfB8AfhjC460cDdcO8y5H58Ao8chO2ZJ8cEitd5D19dN0pnx5P3GhicXokEGcLkHLQIpQnLJ+BsZ/ALen9nDQh1sxPzJeJDXWPF8Wk/uguwL1DNO5G1LsVsnex2IPdCNnmW3yU88nDsghMRIYiJCr4gNgP0G8ZZQDUAsTP/9Gx+qReTt7241hq6OOeQr84MgmWyjI4EKBklK1a66y9jVEO/+4Q1fH0fzTcEwb7/83B+WFzAQuxvcTpsiZJMidq1DM3/FCFygBtTfVVZlZjedbgxIxKUUSBzaQu0y+JvDhn6vhFuNWpO6ZZnLUenAfTiUY85AlsC6u7B1WiF+mAcjpggMJrbUlqp4Fje+Stw5E/rkAM4L0oHOWUVcuovjg/jSienaGwTE8+jPusHykG8MZ2XjGpOet+LtMDv4G6hnLVAdEKt/NJ80zPLhzYYc/2vOeEDBj9cGrVGVk2OfGRqnfFv9okxxfXVuFQOlqAX6wPf9SwhYHJ0bb2M/c0KGyATCA4NUayS67xLb/6xD5+mS8TcIuLSj9wBMJa26eGHh1a4aXW6Eg8YMNqvsVYbxTV05aUtcOTT1Mz4eWQ8ePgLSvqH03vOw5blO31Fa78SkORIwKa6Ion9G+UxDkhiOs3qUgDp5KHf2Ksvt5Mj/6CuLv3Ph1oFJU9GcfiXTJrMcyB5uq+nvYK2KSUvpqjRsuiic3x+fNslLJbAsKtfF8kZC+h8pmx8IVREs70W6zlhH4v/UPjsDS7P2PJK+2OpwcuOBGwlXTKV4Kuhf/9XN0UTD/sOwfuuyeXb9xMD1ccPVpjVZ557rxGWxGZcK3FHO4WN3MMeM3vsJH9ABU5H36JyWr09Kyf6GpWXsYBSMNiu5MF8fDQEwSXnI0bW/sGnnyY7d/F0ZDcPAhIrqBC2YhXcJ3id2HOGvNt0gMJo/o6vExM9fb3GqH0EDsOxA4TP/k/CjuyPqRj5yp+v3mcmO4FD8mINTag9jIdDEmLIL/Lv3q+fqSjqHcjPURvXKgGMWOdNNciIhbif6Ggw5aSFL6YSdjza0AQxJRghfmy+YEaxvsuZZadEcpdOKwp8U6HJ7SiZFXaZ1SHVhGSw3zld5/GenRWxl+BrduS7eOrhQgjNimmxxxDG8Pvv68JZ7PB1hwHppn3EK07JINolJljbpkY8fOsxm3/XdN0Lj4XfL8jf96dZ9LC5d5hpnq3AgYXnjekAVgF5clTWrrwSnu8BON2EmsmgAaYiHpRHNSdJzJhwCEWY17RkoRD3dam/pM4nsLM5j/RjuAvojwhHi3Sh4+BXWHs/gWdDXCBLAwsweKzLdr8NKkIPs+174ShEqusiJ65g4s4O+zgxjdVgT8+S1L/a1Zm9GDaORzpFMGAVqZ1RnhWRWylS3wAnYYM056iaaKa++Jl8wRmn81QKBEKtq7RJlKOpWo5UsLXvaJnBhWR5UmzWeBbfjk0YJlXc+kun4hUtqlcguvs6vMcR1MPuHudx/Bt2PWG+10/DX4t8OYpt8BGm6FJn5Oy9Yu7W0cCjHuixU8aNApgHBnptOkP4w5nmF0+WjZRtFkdbFZEW8WLmbIIr36P52v03P5AY4sxHoIKEOCCd7VdU+tM2vL9GfmCrVH9mxDYeLddy4s+oUOBh/a4evgjD0wk1tQIJtEUkrZKxpvyXOk57xejNcMaJHgNW7w+OMqI0z/aE18C4ImcCz5Tu8xOFZPUhbOByCNwJ/6mljOxWnKBhUqibrFexfDJus1YeJY0uy1WYkvKXG6ef51nGEMgRp9/tOTR69wSX8pzAamLbCuVdI49GciaRRmMuNUkQqwWZxv80CZNCGbeiZQBahb1YIUHSxHcTj9U+B28F55ibdPcQIz19sJdIWzXKfuRkBETmYfY/AW35C0YoFefK9ufVMr0DfcQi8LXxg0Holn4/yReG6IpopHPCIFU6aI1Tvhlj3JNnvj1KxwF79kLZ15QDmPhZt46DKnztscWrqUFMMP+yOL+k+bfqlezTuAsZSnp7y79V58yZz7X8/jBYEqwUKbp5/yJlsr3zuWxRRVlptH9wVZVDRhSZ/XSZCaQtYHOLhTv4qNvGIDCuTxoY1lOdqSd9raG00G6Qdu9ogYPxamSLCbDBa0ev7ggqbC+VIkXIxhTrX7/kzGvlo6TaxnG3v60XhO3sJRpO4VTEtkORt/tPjf4tjpz6bCsNOs+tocjtxH0BY6TAGTwVmFkPW53o41LeHC6BHEyNdYljFKd3LXUuPKGVrSzdQEt9gwdkftyQS92xlA7ArVo/eHe5gRotOEuXTty3rYsbCNk3d2RRV4IviyOC7xSslTQDevDGJo4p/QTUKRTKPILWO6WMR6yHK8dvpomjk4hALaW/zYVxDhY3YKrtxbzibAMOV3e0Qfa7TxepW3Yfx7xXCaUu+zqs1UeLxyrItJnpgz0clmmGzFkiUU36D5sWylK0I01EuUep8X09ODmEnI+EIIJUPiUr/ceubdmJAp77lHuzGiDiWc4ELzKIyDag3OemSYuPHDazP14X8jEvVoGw+YwXuE5fHSIGaPlOxYfoFEbPm+QhgvjSnqwdqkXfacf7IpbfTVmV6LnaaeK8ikoX4OvsrLX+unIUxTnwXKnQaYaDGVleGyP0TsWTFHyWdHCaPmCfLtZ+KdEVECVZHgxjrIaSUiTJfvAkYq69fEoEa1KlLTmMorrDt+KXuG0prmFf5ThHcuvHZuIzr/2r7MJ18EJqqTv3lf0b8frm1nwtQMskiKgzb4uUi+7Y6sKs/e+uGZ7/GcbO7gPnknXdKrlbmZ4JRPzl1eHn6lkey71PRMIYko5pXOuPTMXz77wZ7jEv43ULMYnZvIcvUlg/ROrYtku5SRRs74VRuG3fzvuKrDtC4VVMcaKGrJSyVc6iJo+bfHy78G85TCa24MWkCjCF1/2f+B5eUQPC2IjmdectfDDZrV0oO7g/5WeX+Qo6x303jRgwa+YaaHvzdbNER5XCZLLFPsZAOhDNlHMIdp/oQw8MJZVuFaygMKAwOx9ziLCQVrHcITnfjcsqpyNQJwj5y7KtWLsHGeLud2GO0VFX64kOCZdw9Vox26QxoYqAFWMaxqZlEpw6zQ63T2Hnz3S2kHfiqW1PBb36o7AnrQ/cMX8W9e3jhirnebBzkz873jAdouGU7sLkEYx4Mltxntz7iIV6C8/xAozWA9zzYHyXWRXTi7QfpujdH/kgq5nJ3LK3ttDmPF6NM5lbvfQyo6NE/DS6Tn8CSEr11d91cn2sHwbc5iShxX4PIJAAAAAA="
                     width="100%" alt="">
                <p class="title">Lenovo Ideatab</p>
                <p class="price">1.080.000</p>
                <button>Dat Mua</button>
            </div>
            <div class="col-md-3">
                <img src="data:image/webp;base64,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"
                     width="100%" alt="">
                <p class="title">Iphone 4s 8GB</p>
                <p class="price">6.300.000</p>
                <button>Dat Mua</button>
            </div>
            <div class="col-md-3">
                <img src="data:image/webp;base64,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"
                     width="100%" alt="">
                <p class="title">IPad</p>
                <p class="price">24.000.000</p>
                <button>Dat Mua</button>
            </div>
        </div>
    </form>
</div>
</body>
</html>
