<?php $this->start('main_placeholder'); ?>
  <?php echo $this->Form->create(); ?>
  <h3><?= isset($updateRequest) ? 'Azuriraj robu.' : 'Kreiraj novu robu'; ?></h3>
    <table class="table striped">
      <tbody>
        <?php echo $this->element('itemForm'); ?>
        <tr>
          <td>PID</td>
          <td><?php echo $this->Form->input('Goods.pid',['required' => false,'label' => '']); ?></td>
        </tr>
        <tr>
          <td>HS Number</td>
          <td><?php echo $this->Form->input('Goods.hts_number',['required' => false,'label' => '']); ?></td>
        </tr>
        <tr>
          <td>Tax Group</td>
          <td><?php echo $this->Form->input('Goods.tax_group',['required' => false,'label' => '']); ?></td>
        </tr>
        <tr>
          <td>ECCN</td>
          <td><?php echo $this->Form->input('Goods.product_eccn',['required' => false,'label' => '']); ?></td>
        </tr>
        <tr>
          <td>Za distributere</td>
          <td>
            <?php echo $this->Form->radio('Goods.for_distributors',['0' => 'Ne', '1' => 'Da'],[
              'label' => false
            ]) ?>
          </td>
        </tr>
      </tbody>
    </table>
  <?php echo $this->Form->end(isset($updateRequest) ? 'Azuriraj' : 'Unesi') ?>
<?php $this->end(); ?>