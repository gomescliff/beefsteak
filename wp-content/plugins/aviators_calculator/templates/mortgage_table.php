<h3><?php print $title; ?></h3>

<table class="table">
    <thead>
    <tr>
        <?php foreach ($data as $item): ?>
            <th>
                <span class="legend <?php print $item['index'] ?>"
                      style="background-color: <?php print $item['color']; ?>"></span>
                <?php print $item['title'] ?>
            </th>
        <?php endforeach; ?>
    </tr>
    </thead>

    <tr>
        <?php foreach ($data as $item): ?>
            <td class="item">
                <?php print $item['value'] . $currency; ?>
            </td>
        <?php endforeach; ?>
    </tr>

    <tfoot>
    <tr>
        <td colspan="3">
            <div class="summary">
                <strong><?php print $footer_title ?></strong>
                <?php print $total_summary; ?><?php print $currency; ?>
            </div>
        </td>
    </tr>
    </tfoot>
</table>