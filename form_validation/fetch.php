echo "<tr><td>".$row['name']."</td>";
                echo "<td>".$row['mobile']."</td>";
                echo "<td>".$row['email']."</td>";
                echo "<td> <a href='./delete.php?id=".$row['id']."'><button class='btn btn-danger'>Delete</button></td></tr></a>";
                echo "<td> <a href='./delete.php?id=".$row['id']."'><button class='btn btn-danger'>Delete</button></a> <a href='./edit.php?id=".$row['id']."'> <button class='btn btn-success'>Update</button></a></td></tr>";
            }
            echo "</table>";

        }else{
            echo "No Data found";
        }

    ?>
</body>
</html> 