<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users List</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 40px 20px;
            font-family: Arial, sans-serif;
            background-color: #f4f6f8;
            color: #333;
        }

        .container {
            max-width: 1100px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }

        .header h1 {
            margin: 0;
            font-size: 28px;
            color: #222;
        }

        .user-count {
            background-color: #f0f0f0;
            padding: 8px 14px;
            border-radius: 20px;
            font-size: 14px;
            color: #555;
        }

        .table-wrapper {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 700px;
        }

        thead {
            background-color: #222;
            color: #ffffff;
        }

        th {
            padding: 14px 16px;
            text-align: left;
            font-size: 14px;
        }

        td {
            padding: 14px 16px;
            border-bottom: 1px solid #e5e5e5;
            font-size: 14px;
        }

        tbody tr {
            transition: background-color 0.2s ease;
        }

        tbody tr:hover {
            background-color: #f7f7f7;
        }

        .id {
            font-weight: bold;
            color: #555;
        }

        .username {
            font-weight: 600;
        }

        .email {
            color: #666;
        }

        .empty {
            text-align: center;
            padding: 30px;
            color: #777;
        }

        .footer {
            margin-top: 20px;
            font-size: 13px;
            color: #888;
            text-align: right;
        }

        @media (max-width: 600px) {
            body {
                padding: 20px 10px;
            }

            .container {
                padding: 20px;
            }

            .header {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
            }
        }
    </style>
</head>

<body>

    <div class="container">

        <div class="header">
            <h1>Users List</h1>

            <div class="user-count">
                Total Users: <?= count($users); ?>
            </div>
        </div>

        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Username</th>
                    </tr>
                </thead>

                <tbody>

                    <?php if (!empty($users)): ?>

                        <?php foreach ($users as $user): ?>

                            <tr>
                                <td class="id">
                                    <?= $user['id']; ?>
                                </td>

                                <td>
                                    <?= $user['firstname']; ?>
                                </td>

                                <td>
                                    <?= $user['lastname']; ?>
                                </td>

                                <td class="email">
                                    <?= $user['email']; ?>
                                </td>

                                <td class="username">
                                    <?= $user['username']; ?>
                                </td>
                            </tr>

                        <?php endforeach; ?>

                    <?php else: ?>

                        <tr>
                            <td colspan="5" class="empty">
                                No users found.
                            </td>
                        </tr>

                    <?php endif; ?>

                </tbody>
            </table>
        </div>

        <div class="footer">
            User Management Module
        </div>

    </div>

</body>

</html>